---
published: false
layout: project
title: "The Sovereign Stack"
subtitle: "Local-First Infrastructure for a Family of Four"
icon: dns
altitude: "02"
status: "Active"
context: "Twenty years of family data on someone else's servers, and a question underneath it: what does it actually mean to own your infrastructure? Not as risk mitigation. As practice."
drift: "One policy shift. One pricing change. One acquisition. The entire digital infrastructure disappears, with no recourse. Dependency isn't visible until it's too late to matter."
scaffold: "Local-first containerized homelab: Nextcloud, Jellyfin, Ollama, and PostgreSQL on hardware the family owns, accessible anywhere via Tailscale VPN."
fidelity: "100% uptime through ISP outages and corporate shifts. The experiment is ongoing. Every service migrated is a dependency cut."
faculty: ["engineering"]
seo_keywords: ["Homelab Architecture", "Local-First Infrastructure", "Data Sovereignty", "Self-Hosted Services", "Digital Autonomy"]
description: "Local-first homelab for a family of four. Nextcloud, Jellyfin, Ollama on owned hardware, accessible anywhere via Tailscale. Zero cloud dependencies."
last_modified: 2026-02-21
---

I wanted to know what it actually meant to own infrastructure, not lease it, not subscribe to it, not depend on it. The Sovereign Stack is that question, made operational: a homelab running on hardware in my house, under my jurisdiction, with no external dependencies for daily operation. The experiment is ongoing. Every service migrated is a dependency I now understand rather than one I've accepted as a default.

---

The cloud dependency wasn't theoretical. It was the daily operating condition. Family photos on Google's servers. Documents on Microsoft's servers. Media on streaming services. AI tools via API calls to external providers. Each one a single policy decision away from disruption, with zero recourse and no portability path.

Vendor redundancy doesn't fix this. Three cloud providers are still three sets of terms of service. But the move to self-hosted wasn't only defensive; it was also diagnostic. I wanted to know which dependencies were unavoidable and which I'd accepted without questioning. The structural failure underneath most cloud architecture: Primary infrastructure that requires internet connectivity to function isn't infrastructure. It's a subscription.

---

Docker Compose orchestrating a home server. Family media streams from local storage, no streaming subscriptions. Files and documents on Nextcloud, no Google Drive, no OneDrive. AI inference on local hardware, no external API calls. The kids' Minecraft servers on the same box. Tailscale VPN connects everything from anywhere without port forwarding.

The system runs identically on the home LAN, over VPN from anywhere, or completely offline. Internet is an enhancement, not a requirement.

Storage follows a 3-2-1 backup strategy across three physical drives. Infrastructure state is documented so any family member can understand and operate it. Institutional knowledge in files, not in anyone's head.

---

Zero cloud accounts required for any family daily operation. ISP outages don't interrupt infrastructure; LAN-only operation continues without interruption. Corporate policy changes don't affect data access; everything is physically owned.

What running your own infrastructure teaches you: most cloud dependencies were defaults, not requirements. Streaming accounts, file sync, AI inference, game servers: each one migrated clarifies what you were actually paying for and whether it was worth it. The answer is usually no.

When you own the hardware, availability doesn't depend on someone else's quarterly earnings report. Each new service added increases autonomy, not dependency. The stack scales without adding rent.
