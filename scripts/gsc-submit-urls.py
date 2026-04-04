#!/usr/bin/env python3
"""
Submit URLs to Google Indexing API for crawl/index requests.

Uses service account credentials to send URL_UPDATED notifications
so Google re-crawls and indexes the specified pages.

Usage:
    python3 scripts/gsc-submit-urls.py
"""

import json
import sys
import time
from pathlib import Path

from google.oauth2 import service_account
from googleapiclient.discovery import build

CREDENTIALS_FILE = Path("/home/peter/homelab/credentials/petersalvatodotcom-1195f61b2ed3.json")
SITE_DOMAIN = "https://petersalvato.com"

# URLs to submit (paths only, domain prepended automatically)
URLS_TO_SUBMIT = [
    "/practice/voice-governance/",
    "/practice/lens-extraction/",
    "/practice/structural-capture/",
    "/practice/input-first-design/",
    "/practice/practitioner-in-the-loop/",
    "/brandwalks/",
    "/brandwalks/ableton/",
    "/brandwalks/milwaukee/",
    "/brandwalks/martin/",
    "/brandwalks/moog/",
    "/brandwalks/dickies/",
    "/brandwalks/supreme/",
    "/work/",
    "/practice/",
]


def build_indexing_service():
    """Authenticate and return a Google Indexing API service object."""
    if not CREDENTIALS_FILE.exists():
        print(f"ERROR: Credentials file not found: {CREDENTIALS_FILE}", file=sys.stderr)
        sys.exit(1)

    scopes = ["https://www.googleapis.com/auth/indexing"]
    credentials = service_account.Credentials.from_service_account_file(
        str(CREDENTIALS_FILE), scopes=scopes
    )
    return build("indexing", "v3", credentials=credentials)


def submit_url(service, url):
    """Submit a single URL_UPDATED notification."""
    body = {
        "url": url,
        "type": "URL_UPDATED",
    }
    try:
        response = service.urlNotifications().publish(body=body).execute()
        return True, response
    except Exception as e:
        return False, str(e)


def main():
    print("Google Indexing API — URL Submission")
    print("=" * 50)
    print(f"Credentials: {CREDENTIALS_FILE}")
    print(f"Domain: {SITE_DOMAIN}")
    print(f"URLs to submit: {len(URLS_TO_SUBMIT)}")
    print()

    service = build_indexing_service()

    successes = 0
    failures = 0

    for path in URLS_TO_SUBMIT:
        full_url = f"{SITE_DOMAIN}{path}"
        ok, result = submit_url(service, full_url)

        if ok:
            notify_time = result.get("urlNotificationMetadata", {}).get("latestUpdate", {}).get("notifyTime", "unknown")
            print(f"  OK  {full_url}  (notified: {notify_time})")
            successes += 1
        else:
            print(f"  FAIL  {full_url}")
            print(f"        {result}")
            failures += 1

        # Small delay to avoid rate limiting
        time.sleep(0.5)

    print()
    print(f"Results: {successes} submitted, {failures} failed, {len(URLS_TO_SUBMIT)} total")


if __name__ == "__main__":
    main()
