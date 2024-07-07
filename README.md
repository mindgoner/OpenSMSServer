# OpenSMSServer

OpenSMSServer is a server for sending SMS messages using an API. This README file contains installation and configuration instructions.

## Prerequisites

Before starting the installation, ensure that the following tools are installed on your system:
- [Node.js](https://nodejs.org/) (with npm)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/) (or another compatible database)

## Installation

To install OpenSMSServer, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/mindgoner/OpenSMSServer.git .
    ```

2. **Install/Update PHP dependencies:**
    ```bash
    composer install
    composer update
    ```

3. **Install Node.js dependencies:**
    ```bash
    npm install
    ```

4. **Build frontend assets:**
    ```bash
    npm run build
    ```

5. **Copy the environment configuration file:**
    ```bash
    cp .env.example .env
    ```

6. **Generate the application key:**
    ```bash
    php artisan key:generate
    ```
## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.