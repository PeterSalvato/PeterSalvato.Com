#!/usr/bin/env python3
"""Fetch lyrics from Genius and write them into versogram HTML files.

Usage:
  export GENIUS_TOKEN="your-token-here"
  python3 scripts/fetch-lyrics.py

Or for a single song:
  python3 scripts/fetch-lyrics.py --slug soft-serve

Get a free token at: https://genius.com/api-clients
"""

import json
import os
import sys
import argparse
import lyricsgenius

VERSOGRAMS_DIR = os.path.join(os.path.dirname(__file__), '..', '_versograms')
DATA_FILE = os.path.join(os.path.dirname(__file__), '..', '_data', 'versograms.json')

# Only fetch for songs that have metadata (the 6 regenerated ones)
TARGET_SLUGS = ['soft-serve', 'sour-times', '46-and-2', 'alberto-balsam', 'buena', 'push-downstairs']


def get_songs_data():
    with open(DATA_FILE) as f:
        data = json.load(f)
    return {s['slug']: s for s in data['songs']}


def write_lyrics_to_file(slug, lyrics_text):
    filepath = os.path.join(VERSOGRAMS_DIR, f'{slug}.html')
    if not os.path.exists(filepath):
        print(f"  SKIP: {filepath} does not exist")
        return False

    with open(filepath) as f:
        content = f.read()

    # Replace placeholder or existing lyrics
    parts = content.split('---')
    if len(parts) >= 3:
        frontmatter = '---' + parts[1] + '---'
        body = lyrics_text
        new_content = frontmatter + '\n\n' + body + '\n'
    else:
        print(f"  ERROR: Could not parse frontmatter in {filepath}")
        return False

    with open(filepath, 'w') as f:
        f.write(new_content)

    print(f"  WROTE: {filepath}")
    return True


def main():
    parser = argparse.ArgumentParser(description='Fetch lyrics from Genius')
    parser.add_argument('--slug', help='Fetch only this slug')
    parser.add_argument('--dry-run', action='store_true', help='Print lyrics without writing')
    args = parser.parse_args()

    token = os.environ.get('GENIUS_TOKEN')
    if not token:
        print("ERROR: Set GENIUS_TOKEN environment variable")
        print("Get a free token at: https://genius.com/api-clients")
        sys.exit(1)

    genius = lyricsgenius.Genius(token, verbose=False, remove_section_headers=True)

    songs = get_songs_data()
    slugs = [args.slug] if args.slug else TARGET_SLUGS

    for slug in slugs:
        if slug not in songs:
            print(f"SKIP: {slug} not in versograms.json")
            continue

        song_data = songs[slug]
        artist = song_data['artist']
        title = song_data['title']

        if song_data.get('instrumental'):
            print(f"SKIP: {title} by {artist} (instrumental)")
            continue

        print(f"Fetching: {title} by {artist}...")
        result = genius.search_song(title, artist)

        if result and result.lyrics:
            lyrics = result.lyrics
            # Clean up: remove the song title header Genius adds
            lines = lyrics.split('\n')
            # Genius often prepends "SongTitle Lyrics" as first line
            if lines and 'Lyrics' in lines[0]:
                lines = lines[1:]
            # Remove trailing "Embed" or contributor count
            while lines and ('Embed' in lines[-1] or 'Contributors' in lines[-1] or lines[-1].strip() == ''):
                lines.pop()
            lyrics = '\n'.join(lines).strip()

            if args.dry_run:
                print(f"--- {title} ---")
                print(lyrics[:200] + '...' if len(lyrics) > 200 else lyrics)
                print()
            else:
                write_lyrics_to_file(slug, lyrics)
        else:
            print(f"  NOT FOUND on Genius")


if __name__ == '__main__':
    main()
