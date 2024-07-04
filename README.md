# TYPO3 v12 Extension Skeleton

## Overview
This repository provides a comprehensive reference model for developing extensions in TYPO3 v12, following official TYPO3 documentation guidelines. It offers a structured, best-practice approach to quickly bootstrap new extensions, suitable for both beginners and experienced developers.

## Getting Started
1. To use this skeleton, simply clone the repository and rename the folder to your desired extension name. 
2. Link the extension in your TYPO3 installation by adding it to the `typo3conf/ext` directory.
    - `ext_emconf.php`: Update with your extension's metadata, such as title, description, author, and version...
    - `composer.json`: Update with your project details, including name, description, namespace and dependencies...
4. Follow the provided examples and documentation to add your custom functionality.
5. Refer to the TYPO3 official documentation for further customization and advanced features.

## Installation
To install this TYPO3 extension skeleton, follow these steps:

1. Clone the repository:
    ```bash
    git clone https://github.com/ozhantr/typo3-v12-extension-skeleton.git
    ```
2. Navigate to the extension directory:
    ```bash
    cd typo3-v12-extension-skeleton
    ```

## Directory Structure

- **Classes**
    - **Controller**: Handles requests and generates responses.
    - **Domain**
        - **Model**: Defines data structures.
        - **Repository**: Manages data persistence and retrieval.
    - **ViewHelpers**: Custom view helpers for Fluid templates, extending the template functionality.
- **Configuration**
    - **Backend**: Backend configuration files.
    - **Extbase**
        - **Persistence**: Extbase persistence configurations.
    - **FlexForms**: FlexForm configurations.
    - **RTE**: Rich Text Editor settings.
    - **TCA**
        - **Overrides**: Custom overrides for Table Configuration Array (TCA) settings.
    - **TsConfig**
        - **Page**: Page-specific configurations.
        - **User**: User-specific configurations.
    - **TypoScript**
        - **constants.typoscript**: Defines TypoScript constants.
        - **setup.typoscript**: Defines TypoScript setup configurations.
    - **Yaml**: Additional YAML configurations.
    - **ContentSecurityPolicies.php**: Content security policy settings.
    - **RequestMiddlewares.php**: Middleware configurations.
    - **Icons.php**: Custom icon configurations.
    - **Services.yaml**: Service definitions.
    - **page.tsconfig**: Page-level configurations.
- **Documentation**
    - Placeholder for extension documentation, such as user guides and developer notes.
- **Resources**
    - **Private**
      - **Language**: Localization files.
      - **Layouts**: Fluid layout templates.
      - **Partials**: Fluid partial templates.
      - **Templates**: Main Fluid templates.
    - **Public**
      - **Css**: Public CSS files.
      - **Icons**: Public icon files.
      - **Images**: Public image files.
      - **JavaScript**: Public JavaScript files.
- **Test**
    - **Functional**: Functional test cases.
    - **Unit**: Unit test cases.

+ **composer.json**: Composer configuration for dependencies.
+ **ext_conf_template.txt**: Template for extension configuration.
+ **ext_emconf.php**: Metadata about the extension, such as title, description, and version.
+ **ext_localconf.php**: Local configuration settings.
+ **ext_tables.php**: Definitions for database tables used by the extension.
+ **ext_tables.sql**: SQL schema for creating database tables.
+ **ext_tables_static+adt.sql**: SQL file for static data and additional table definitions.

## Contributing
Contributions are welcome! Please fork the repository and create a pull request with your changes. Make sure to follow the existing code style and include tests where applicable.

## License
This project is licensed under the GPL v2+.

## Contact
For any questions or feedback, please create an issue in the repository.

---

Happy coding!
