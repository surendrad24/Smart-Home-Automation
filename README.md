# Smart Home Automation

Raspberry Pi based home-automation project with a legacy PHP web panel and a Flask GPIO dashboard.

## What this project does

This repository controls relays and GPIO-connected devices (locks, pump, light, fan, etc.) from a web UI.

Primary control paths:
- PHP UI (`html/index.php`, `html/relay.php`) triggers `relay.py` commands.
- Python relay controller (`html/relay.py`) sends serial commands to `/dev/ttyUSB0` and toggles Raspberry Pi GPIO pins.
- Flask UI (`app/app.py`) offers a simpler GPIO dashboard on port `9090`.

## Architecture Overview

- `html/`: Main legacy web app (PHP + static assets).
- `html/relay.py`: Core actuator logic and command-to-relay mapping (`RMxRy*` commands).
- `app/`: Flask app and template-based control panel.
- `python/script.py`: WebIOPi example script (scheduled GPIO light control).
- `html/modules/a1/`: Third-party Twilio PHP SDK and examples (kept for compatibility; not core relay logic).

## Hardware/OS Assumptions

- Raspberry Pi with GPIO access.
- Linux host with web root expected at `/var/www/html`.
- Python with `RPi.GPIO`, `pyserial`, and Flask available.
- USB serial relay/MCU device available at `/dev/ttyUSB0`.
- Web server stack for PHP pages (typically Apache/Nginx + PHP).

## Important Notes

- Many PHP files use hardcoded command execution paths such as:
  - `sudo python /var/www/html/relay.py 'RM...'
- If your deploy path differs from `/var/www/html`, update those paths before running.
- Files under `html/modules/a1/` are vendor-like legacy content and may include demo code; review before production use.

## Running the Flask UI (optional panel)

From repo root:

```bash
cd app
python app.py
```

Then open:
- `http://<raspberry-pi-ip>:9090/`

## Running the PHP UI (legacy panel)

- Deploy `html/` under your web server root (or adjust absolute command paths in PHP).
- Ensure web user can execute Python relay scripts with required GPIO/serial permissions.
- Open `index.php` in browser through your web server.

## Command Model

Relay commands are encoded strings such as:
- `RM1R11`, `RM1R10`, ...
- `RM3R1` / `RM3R2` for momentary "push" lock actions.

`relay.py` maps each code to either:
- Serial writes (for external relay controller), or
- Direct GPIO HIGH/LOW toggles.

## Folder Naming Cleanup Done

To keep names shell-safe and consistent, this repo now uses:
- `html/reference-assets/` (renamed from `html/downloaded images/`)

No code references were found to the old folder name, so behavior is unchanged.

## Suggested Next Cleanup (optional)

- Replace hardcoded `/var/www/html/relay.py` paths with a shared config value.
- Move third-party/vendor code to a dedicated `vendor/` directory.
- Remove committed cache/binary artifacts (for example `__pycache__`, large zip binaries) or manage them with `.gitignore`/LFS.
- Add a hardware pinout diagram and relay-channel mapping table for onboarding.
