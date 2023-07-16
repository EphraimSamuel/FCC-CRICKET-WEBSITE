## About FCC-CRICKET

Federal Communications Commission (FCC) is an independent agency of the United States government responsible for regulating communication technologies, including radio, television, wire, satellite, and cable. The FCC primarily focuses on issues related to communication policy, licensing, spectrum allocation, and enforcement.

## FCC-CRICKET Application Development Procedures

1. CD into the application root directory with your command prompt/terminal/git bash.

2. Run `cp .env.example .env`.

3. Inside `.env` file, setup database, mail and other configurations.

4. Run `composer install`.

5. Run `php artisan key:generate` command.

6. Create a new database

7. Run `php artisan migrate:fresh --seed` command.

8. Run `php artisan serve` command.

8. If the error persist, run the following commands
a. `php artisan migrate:fresh --seed`
b. `php artisan config:clear`
c. `php artisan key:generate`
d. `php artisan config:clear`

## Route Nomenclature