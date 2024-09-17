<!-- Kids drink toddy.
Teens drink coke.
Young adults drink beer.
Adults drink whisky.
Make a function that receive age, and return what they drink.

Rules:

Children under 14 old.
Teens under 18 old.
Young under 21 old.
Adults have 21 or more. -->


function people_with_age_drink($age) {
if($age >= 21){
return "drink whisky";
}else if($age >= 18 && $age < 21){ return "drink beer" ; } else if($age>= 14 && $age < 18){ return "drink coke" ; }
        return "drink toddy" ; }