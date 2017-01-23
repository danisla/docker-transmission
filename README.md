# Docker Transmission with OpenVPN

## Example with ExpressVPN

Clone repo:

```
git clone https://github.com/danisla/docker-transmission.git
git submodule init && git submodule update
```

Make the required directories:

```
mkdir -p vpn data complete incomplete downloading
```

Download the "Manual Config" for your region from the [ExpressVPN site](https://www.expressvpn.com/setup). Save this config to `./vpn/expressvpn.ovpn`

Copy your username and password to the file: `./vpn/vpn.auth`:

```
cat > vpn/vpn.auth <<"EOF"
YOUR_USERNAME
YOUR_PASSWORD
EOF
```

Create an environment file with your local timezone, config file and port number from the ovpn file:

```
cat > .env <<"EOF"
OVPN_TZ=PST8PDT
OVPN_CONFIG=/vpn/expressvpn.ovpn
OVPN_PORT=1195
EOF
```

Start the services:

```
docker-compose up -d
```

Open the Transmission Web UI:

```
open http://localhost:8080
```
