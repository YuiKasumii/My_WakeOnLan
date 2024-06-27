
# WakeOnLan Private

This project provides a web interface to manage and monitor the status of a server using ping status and Wake-on-LAN (WoL) functionality. The interface allows you to power on the server and check its current status.

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)
- [License](#license)

## Project Overview

The WakeOnLan Private project includes a simple web interface that lets you:
- Check the ping status of a server.
- Power on the server using WoL.

## Features

- **Ping Status Toggle**: Display the server status and update it in real-time.
- **Wake-on-LAN**: Send a WoL packet to power on the server.
- **Responsive Design**: The web interface is designed to be responsive and user-friendly.

## Installation

To set up the project, follow these steps:

1. **Clone the repository:**
    ```sh
    git clone https://github.com/YuiKasumii/WakeOnLan_Private.git
    ```
2. **Navigate to the project directory:**
    ```sh
    cd WakeOnLan_Private
    ```
3. **Ensure you have a local server running (e.g., XAMPP, WAMP, or any other PHP server).**

## Usage

Open the `index.html` file in your web browser to view the interface. The server status will be checked automatically, and you can use the Power ON button to send a Wake-on-LAN request.

## File Structure

### index.html
This file contains the HTML structure for the web interface. It includes the buttons and status text that allow users to interact with the server.

### ping_api.php
This file handles the server's ping status check. It takes an IP address and a count as parameters and returns the ping result in JSON format.

### wol.php
This file sends a Wake-on-LAN packet to the server. It triggers the server to power on when the Power ON button is clicked on the web interface.

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License.
