## Author: Joel Heredia

## ZipDev - New Hire Candidate Test Project

### Basic Attendance Roster
A chance to demonstrate your ability to work with Laravel and Vue.

### Overview.
For a single course titled “Example Course,” display a roster of students to an instructor allowing the instructor to record each student as present or absent. Use the example student data provided on page 2 of this document to populate the roster.

### Requirements
1. Backend built in Laravel
2. Frontend built in Vue
3. Frontend must interact with backend via RESTful API
4. Backend must persist present/absent status in a MySQL database
5. Write at least one feature or unit test in PHPUnit

### What’s Not Required for This Project
Authentication
Front-end testing
Over-engineering (keep it simple)

### Timing and Delivery
Don’t spend too much time on this project. Keep it simple. Share your code via GitHub repo or by email.

### Example Course Students
Student ID,First Name,Last Name,Email
1605092601799,Melvin,Levine,libero@ultricessitamet.co.uk
1627060401499,Elaine,Donaldson,Morbi.vehicula@imperdiet.ca
1699112687399,Roth,Hinton,lorem@Nullamscelerisque.net
1651061329999,Evelyn,Atkinson,tempus.eu@dolorelitpellentesque.com
1669031424299,Jackson,Gould,lorem@orci.com
1610122466699,Amena,Winters,eu.lacus@Uttincidunt.org
1660020239499,Giacomo,James,Duis.mi.enim@mi.com
1664110352499,Nathan,Moran,eget.lacus@erosNam.net
1683092555899,Vivian,Workman,fringilla@sagittis.net
1607102510699,Amal,Cervantes,aliquet@in.co.uk
1656061966999,Octavius,Wade,pede@mus.ca
1667081298699,Kenneth,Fletcher,in.consequat@dignissimtemporarcu.org
1697062419499,Malik,Silva,Suspendisse@commodo.com
1656081805699,Xanthus,Mcgowan,ridiculus.mus.Proin@Maurisvestibulum.org
1638092980799,Kay,Marquez,In@blanditviverraDonec.co.uk
1691091750799,Oleg,Koch,natoque.penatibus.et@Quisqueporttitor.com
1611010296699,Cathleen,Greene,semper@facilisisfacilisismagna.ca
1605031215599,Naomi,Ferguson,euismod.mauris@vulputateeu.net
1651092040799,Chadwick,Allen,enim@semper.co.uk
1611112931699,Jennifer,Stevenson,sollicitudin.adipiscing@Aenean.com
1688110873699,Brent,Mcneil,ac.arcu@Nuncsollicitudincommodo.net
1665101843499,Otto,Hart,elementum@Maurisvestibulum.org
1653062608899,Victor,Mcconnell,sem.Nulla@Quisque.co.uk
1695092204299,Branden,Morgan,Nulla.facilisis.Suspendisse@vitae.ca
1641010876399,Caryn,Reid,Aliquam.ornare.libero@adlitoratorquent.com
1609062069499,Wayne,Pennington,bibendum@metus.com
1687072131299,Xanthus,Massey,semper@odio.net
1611102284199,Ahmed,Galloway,eget.ipsum.Donec@laoreetlectusquis.co.uk
1691060523599,Willa,Wagner,at@interdumNuncsollicitudin.edu
1643020941699,Joy,Carey,scelerisque.lorem@dolordolortempus.ca

## Execution notes

### Install composer dependencies

```sh
composer install
```

### Install npm dependencies

```sh
npm i
```

### Execute migrations

```sh
php artisan migrate
```

### Execute seeders

```sh
php artisan db:seed
```

### Add the following vars at the end of the .env file

```sh
VITE_LOCALHOST_URL="http://localhost:8000/"
VITE_DEFAULT_COURSE=1
```

### Compile the assets

```sh
npm run dev
```

### Start the laravel application server

```sh
php artisan serve
```

### Visit the project URL

[Local Server](http://localhost:8000/course/1)

