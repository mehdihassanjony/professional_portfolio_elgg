**README.md**

# Elgg Profile Customization Plugin

## Overview

This Elgg plugin is designed to customize and extend the functionality of user profiles on an Elgg-powered website. The customization includes handling Ajax calls to update various sections of the user profile, such as personal information, work experience, education, skills, languages, and portfolio.

## Features

### Profile Section

- **Update Profile Information**: Allows users to update their profile fields, including a special validation for the email field.
- **Update Job Information**: Modifies the brief description field based on the user's job information.

### About Me Section

- **Update Description**: Enables users to update their 'About Me' description with access control.

### Education Section

- **Manage Education Entries**: Supports adding, editing, and deleting education entries, including fields like school, degree, and start/end dates.

### Work Experience Section

- **Manage Work Experience Entries**: Allows users to add, edit, and delete work experience entries, including fields like title, organization, and responsibilities.

### Skills Section

- **Manage Skills**: Facilitates adding and removing skills for user profiles.

### Languages Section

- **Update Language Proficiency**: Allows users to update their proficiency in English and Bengali languages.

### Portfolio Section

- **Manage Portfolio Entries**: Enables users to add, edit, and delete portfolio entries, including fields like title, description, link, and publication date.

## Usage

### Ajax Calls

- The plugin utilizes Ajax calls to dynamically update different sections of the user profile without requiring a full page reload.
- Each section has its own handling logic within the PHP script.

### Validation

- Special validation is applied to the email field to ensure it is not empty and adheres to specific criteria.
- Domain validation checks whether the email domain is in a predefined list or ends with 'gc.ca'.

### Error Handling

- Error messages are displayed when validation fails, providing users with clear feedback on what needs to be corrected.

### Access Control

- Access control is implemented for specific profile sections, ensuring that certain information is only accessible by authorized users.

## Installation

1. Download the plugin files.
2. Place the plugin folder in the `mod` directory of your Elgg installation.
3. Enable the plugin through the Elgg administration interface.

## Configuration

No additional configuration is required. The plugin seamlessly integrates with the Elgg user profile system.

## Compatibility

This plugin is developed and tested on Elgg [version number].

## Known Issues

- If found email me at shoyshab@gmail.com

## Contribution

Feel free to contribute by submitting bug reports, feature requests, or pull requests.

## License

Mehdi Hassan Jony
# professional_portfolio_elgg
