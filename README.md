# Websites Blade

Websites Blade is small application that retrieves websites from the database and gives the ability to filter by name/date in ascending or descending order and search by name. This application uses the Laravel Blade templating.

## Installation

After cloning the repository and migrating the database(MySQL) we can generate some websites and users thanks to our factories.

```bash
php artisan tinker
factory(App\Website::class, 50)->create();
```
For both applications I used MySQL. The .env file is included in the project(intentionally).

## Differences between the two applications

| Functionalities               | Websites Blade | Websites Vue |   |   |
|-------------------------------|----------------|--------------|---|---|
| Authentication                | V              | X            |   |   |
| Show specific website         | V              | X            |   |   |
| Vue components                | X              | V            |   |   |
| Search by name                | V              | V            |   |   |
| Order by name asc/desc        | V              | V            |   |   |
| Order by date create asc/desc | V              | V            |   |   |

## Notes
- Some of the endpoints could be combined and could be separated in the appropriate routes files. For the sake of simplicity and clarity I decided to create them like this.
- For Websites Blade a user needs to be logged in, in order to create a new websites.
