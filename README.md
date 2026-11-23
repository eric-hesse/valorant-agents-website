# 🎯 Valorant Agents Website

A fan website about the agents of the game *Valorant* – my computer science school project in grade 12 (May–June 2025).

*Eine Fan-Website über die Agenten aus dem Spiel Valorant – mein Informatik-Schulprojekt in der 12. Klasse (Mai–Juni 2025).*

## Features

- Start page with a background video and navigation
- Overview of all agents and a separate page for each of the **21 agents**
- **Live search** for agents by name, role or ability – the search bar asks a small PHP API ([`search_agents.php`](search_agents.php)) that queries a **MySQL** database
- Database page that shows all tables of the agents database (agents, abilities and how they are linked)

## Two versions

| Tag | Date | |
|---|---|---|
| [`v1-html`](../../tree/v1-html) | May 2025 | Static HTML pages, database page as a SQLiteStudio export |
| [`v2-php`](../../tree/v2-php) | June 2025 | PHP pages, working live search, database page reads directly from MySQL |

## Run it locally

The site was developed with **USBWebserver** (Apache + PHP + MySQL).

1. Copy the files into the web server's root folder.
2. Create a MySQL database called `valorant agents` with the tables `agenten`, `fähigkeiten` and `agenten_fähigkeiten`.
3. The database login in the PHP files is USBWebserver's local default (`root` / `usbw`) – change it if your setup differs.

## Images

The images and the background video (`Bilder/`) are not included: they are artwork from *Valorant* and belong to **Riot Games**. The pages therefore show empty picture frames in this repository.

*Valorant and all related content are trademarks and © Riot Games, Inc. This is a non-commercial school project and is not endorsed by Riot Games.*
