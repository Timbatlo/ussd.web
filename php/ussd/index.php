<?
//Read the variables sent via POST from AT gateway
$seasionId = $_POST["seasionId"];
$servicecode = $_POST["servicecode"];
$phonenumber = $_POST["phonenumber"];
$text = $_POST["text"];

if($ text =="") {
    // This is the first request> note how we start the response with CON
    $response = "CON Checkers springsmall weekly schedule\n";
    $response .= "1.Departments\n";
    $response .= "2.Employees on leave";
} else if ($text = "1") {
    //Business logic for the first level response
    $response = "CON Choose Department information you want to view\n";
    $response .= "1.Bakery Department\n";
    $response .= "2.Cash Office Department";
    $response .= "3.Deli Department";
    $response .= "4.Fish Department";
    $response .= "5.Fruit & Veg Department";
    $response .= "6.Front End Department";
    $response .= "7.Grocery Department";
    $response .= "8.Liquor Department";
    $response .= "9.Money Market Department";
    $response .= "10.Non-Foods Department";
    $response .= "11.Perishables Department";
    $response .= "12.Receiving Department";
    $response .= "13.Stock Department";
    $response .= "15.Wine Department";

} else if ($text = "2") {
    //Business logic for the first level response
    //This is a terminal request. Note how we start with END.
    $response = "END Employees on leave are".1.(FT45) Matsoyane , Sidney;
    $response = "END Employees on leave are".2.(PT) Manyakeni , Maria;
    $response = "END Employees on leave are".3.(PT) (2) Mosoma , Tumelo;
    $response = "END Employees on leave are".4.(FT40) Ndlovu , Gabisile;
    $response = "END Employees on leave are".5.(FT40) Nkabinde , Isaac;
    $response = "END Employees on leave are".6.(FT40) Nkabinde , Isaac;
    $response = "END Employees on leave are".7.(PT) Sekgobe , Tebatjo;
    $response = "END Employees on leave are".8.(PT) Tshabalala , Nqobile;
} else if ($text = "1*1") {
    //This is the second level response where the user selected 1 in the first instance
    $bakeryDepartment = "1.(FT40) (#2) Maluleka, Hlayisani
    -Bakery Baker
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = 9am:6pm
    -Thu = 9am:6pm
    -Fri = 9am:6pm
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    2.(FT40) Mathabethe, Maria
    -Bakery Baker
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = 7am:4pm
    -Thu = 7am:4pm
    -Fri = 7am:4pm
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    3.(PT) Minnie, Mbali
    -Bakery Baker
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = 7am:4pm
    -Thu = 7am:4pm
    -Fri = OFF
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    4.(PT) Morake , Innocent
    -Bakery Assistant
    -Mon = 8am:5pm
    -Tue = 7am:4pm
    -Wed = 8am:5pm
    -Thu = 6am:3pm
    -Fri = OFF
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    5.(PT) Mtsweni , Thuli
    -Bakery Counter Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    6.(PT) Nkonduso , Ntombifikile
    -Bakery Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    7.(FT40) Ramoshai , Monalwa
    -Bakery Controller
    -Mon = 6am:3pm
    -Tue = 6am:3pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 6am:3pm
    -Sat = 7am:4pm
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    8.(FT40) (#2) Saki , Ziphozihle
    -Bakery Assistant
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    9.(PT) Sibiya , Thobeka
    -Bakery Counter Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5am 
    -Total Net Hr = 40.00
    
    10.(PT) Zulu , Patricia
    -Bakery Baker
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    10.(PT) Zulu , Patricia
    -Bakery Baker
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00";

    //This is the terminal request. Note how we start with END
    $response = "END Your schedule is".1.(FT40) (#2) Maluleka, Hlayisani
    -Bakery Baker
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = 9am:6pm
    -Thu = 9am:6pm
    -Fri = 9am:6pm
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    2.(FT40) Mathabethe, Maria
    -Bakery Baker
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = 7am:4pm
    -Thu = 7am:4pm
    -Fri = 7am:4pm
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    3.(PT) Minnie, Mbali
    -Bakery Baker
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = 7am:4pm
    -Thu = 7am:4pm
    -Fri = OFF
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    4.(PT) Morake , Innocent
    -Bakery Assistant
    -Mon = 8am:5pm
    -Tue = 7am:4pm
    -Wed = 8am:5pm
    -Thu = 6am:3pm
    -Fri = OFF
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    5.(PT) Mtsweni , Thuli
    -Bakery Counter Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    6.(PT) Nkonduso , Ntombifikile
    -Bakery Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    7.(FT40) Ramoshai , Monalwa
    -Bakery Controller
    -Mon = 6am:3pm
    -Tue = 6am:3pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 6am:3pm
    -Sat = 7am:4pm
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    8.(FT40) (#2) Saki , Ziphozihle
    -Bakery Assistant
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = OFF 
    -Total Net Hr = 40.00
    
    9.(PT) Sibiya , Thobeka
    -Bakery Counter Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5am 
    -Total Net Hr = 40.00
    
    10.(PT) Zulu , Patricia
    -Bakery Baker
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    10.(PT) Zulu , Patricia
    -Bakery Baker
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00
} else if ($text = "1*2") {
    //This is a second level response where the user selected 1 in the first instance
    $CashOfficeDepartment = "1.(FT40) Makgoka , Mmaphuti
    -Cash Office Controller
    -Mon = 10:30am:7:30pm
    -Tue = 10:30am:7:30pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10:30am:7:30pm
    -Sat = 10:30am:7:30pm
    -Sun = 10:30am:7:30pm
    -Total Net Hr = 40.00
    
    2.(PT) (P17) Makuwa , Reginah
    -Cash Office Clerk
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = 9am:6pm
    -Total Net Hr = 40.00
    
    3.(FT40) Mofokeng , Libakiso
    -Cash Office Clerk
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    4.(FT40) Shando , Mavis
    -Cash Office Clerk
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00";

    //This is the terminal request. Note how we start with END
    $response = "END Your schedule is".1.(FT40) Makgoka , Mmaphuti
    -Cash Office Controller
    -Mon = 10:30am:7:30pm
    -Tue = 10:30am:7:30pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10:30am:7:30pm
    -Sat = 10:30am:7:30pm
    -Sun = 10:30am:7:30pm
    -Total Net Hr = 40.00
    
    2.(PT) (P17) Makuwa , Reginah
    -Cash Office Clerk
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = 9am:6pm
    -Total Net Hr = 40.00
    
    3.(FT40) Mofokeng , Libakiso
    -Cash Office Clerk
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    4.(FT40) Shando , Mavis
    -Cash Office Clerk
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00;
} else if ($text = "1*3") {
    //This is a second level response where the user selected 1 in the first instance
    $DeliDepartment = "1.(FT40) (#2) Hlako, Kolebe
    -Deli Assistant
    -Mon = 6am:3pm
    -Tue = 6am:3pm
    -Wed = 6am:3pm
    -Thu = 6am:3pm
    -Fri = 6am:3pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    2.(FT40) Kekana , Modiiegi
    -Deli Controller
    -Mon = 6am:3pm
    -Tue = 6am:3pm
    -Wed =  OFF
    -Thu =  OFF
    -Fri = 6am:3pm
    -Sat = 6am:3pm
    -Sun = 6am:3pm
    -Total Net Hr = 40.00
    
    3.(PT) Mkhoza , Andile
    -Deli Assistant
    -Mon =  OFF
    -Tue =  OFF
    -Wed = 6am:3pm
    -Thu = 6am:3pm
    -Fri = 6am:3pm
    -Sat = 6am:3pm
    -Sun = 6am:3pm
    -Total Net Hr = 32.00
    
    4.(PT) Monareng , Smangele
    -Deli Counter Assistant
    -Mon =  OFF
    -Tue =  OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    5.(PT) Phakane , Mmangetane
    -Deli Assistant
    -Mon =  OFF
    -Tue =  OFF
    -Wed =  OFF
    -Thu = 6am:3pm
    -Fri = 6am:3pm
    -Sat = 6am:3pm
    -Sun = 6am:3pm
    -Total Net Hr = 32.00
    
    6.(PT) Saule , Mapuka
    -Deli Counter Assistant
    -Mon =  OFF
    -Tue =  OFF
    -Wed =  OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    7.(PT) Shabalala , Sesie
    -Deli Counter Assistant
    -Mon = OFF
    -Tue = OFF
    -Wed = OFF
    -Thu = 6am:3pm
    -Fri = 6am:3pm
    -Sat = 6am:3pm
    -Sun = 6am:3pm
    -Total Net Hr = 32.00
    
    8.(PT) Sikhakhane , Fikile
    -Deli Counter Assistant
    -Mon = OFF
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 9am:6pm
    -Total Net Hr = 32.00
    
    9.(FT40) (#2) Tjabadi , Sinah
    -Deli Assistant
    -Mon = 6am:3pm
    -Tue = 6am:3pm
    -Wed = 6am:3pm
    -Thu = 6am:3pm
    -Fri = 6am:3pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00";

    //This is the terminal request. Note how we start with END
    $response = "END Your schedule is".1.(FT40) (#2) Hlako, Kolebe
-Deli Assistant
-Mon = 6am:3pm
-Tue = 6am:3pm
-Wed = 6am:3pm
-Thu = 6am:3pm
-Fri = 6am:3pm
-Sat = OFF
-Sun = OFF
-Total Net Hr = 40.00

2.(FT40) Kekana , Modiiegi
-Deli Controller
-Mon = 6am:3pm
-Tue = 6am:3pm
-Wed =  OFF
-Thu =  OFF
-Fri = 6am:3pm
-Sat = 6am:3pm
-Sun = 6am:3pm
-Total Net Hr = 40.00

3.(PT) Mkhoza , Andile
-Deli Assistant
-Mon =  OFF
-Tue =  OFF
-Wed = 6am:3pm
-Thu = 6am:3pm
-Fri = 6am:3pm
-Sat = 6am:3pm
-Sun = 6am:3pm
-Total Net Hr = 32.00

4.(PT) Monareng , Smangele
-Deli Counter Assistant
-Mon =  OFF
-Tue =  OFF
-Wed = 8am:5pm
-Thu = 8am:5pm
-Fri = 8am:5pm
-Sat = 8am:5pm
-Sun = 8am:5pm
-Total Net Hr = 40.00

5.(PT) Phakane , Mmangetane
-Deli Assistant
-Mon =  OFF
-Tue =  OFF
-Wed =  OFF
-Thu = 6am:3pm
-Fri = 6am:3pm
-Sat = 6am:3pm
-Sun = 6am:3pm
-Total Net Hr = 32.00

6.(PT) Saule , Mapuka
-Deli Counter Assistant
-Mon =  OFF
-Tue =  OFF
-Wed =  OFF
-Thu = 10am:7pm
-Fri = 10am:7pm
-Sat = 9am:6pm
-Sun = 8am:5pm
-Total Net Hr = 40.00

7.(PT) Shabalala , Sesie
-Deli Counter Assistant
-Mon =  OFF
-Tue = OFF
-Wed = OFF
-Thu = 6am:3pm
-Fri = 6am:3pm
-Sat = 6am:3pm
-Sun = 6am:3pm
-Total Net Hr = 32.00

8.(PT) Sikhakhane , Fikile
-Deli Counter Assistant
-Mon = OFF
-Tue = OFF
-Wed = OFF
-Thu = 10am:7pm
-Fri = 10am:7pm
-Sat = 10am:7pm
-Sun = 9am:6pm
-Total Net Hr = 32.00

9.(FT40) (#2) Tjabadi , Sinah
-Deli Assistant
-Mon = 6am:3pm
-Tue = 6am:3pm
-Wed = 6am:3pm
-Thu = 6am:3pm
-Fri = 6am:3pm
-Sat = OFF
-Sun = OFF
-Total Net Hr = 40.00;
} else if ($text = 1*4) {
    //This is a second level response where the use selected 1 in the first instance
    $FishDepartemnt = "1.(PT) Dube, Lucky
    -Fish Shop Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    2.(PT) Maluleka , Sylvia
    -Fish Shop Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = 9am:6pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    3.(FT40) (#2) Rapola , Kenneth
    -Fish Shop Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 7am:4pm
    -Total Net Hr = 40.00
    
    4.(FT45) Shabangu , Sifiso
    -Fish Shop Assistant
    -Mon = 6am:3pm
    -Tue = 6am:3pm
    -Wed = 6am:3pm
    -Thu = 6am:3pm
    -Fri = 6am:3pm
    -Sat = 6am:3pm
    -Sun = OFF
    -Total Net Hr = 45.00"

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(PT) Dube, Lucky
    -Fish Shop Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    2.(PT) Maluleka , Sylvia
    -Fish Shop Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = 9am:6pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    3.(FT40) (#2) Rapola , Kenneth
    -Fish Shop Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 7am:4pm
    -Total Net Hr = 40.00
    
    4.(FT45) Shabangu , Sifiso
    -Fish Shop Assistant
    -Mon = 6am:3pm
    -Tue = 6am:3pm
    -Wed = 6am:3pm
    -Thu = 6am:3pm
    -Fri = 6am:3pm
    -Sat = 6am:3pm
    -Sun = OFF
    -Total Net Hr = 45.00;
} else if ($text = 1*5) {
    //This is a second level response where the user selected 1 in the first instance
    $FrontEndDepartment = "1.(PT) Gwaza, Athi
    -(CH)Front End Cahier
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    2.(PT) Hlengetwa , Sphiwe
    -(CH)Front End Till Packer
    -Mon = 7am:4pm
    -Tue = OFF
    -Wed = 7am:4pm
    -Thu = 7am:4pm
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    3.(PT) Jlane , Busi
    -(CH)Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    4.(PT) Kodwa , Nompumelelo
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    5.(PT) Ledwaba , Boitumelo
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    6.(PT) Mabena , Sithandwa
    -(CH) Front End Till Packer
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    7.(FT40) Mabena , Thethiwe
    -(CH) Front End Controller
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    8.(PT) Mabuela , Confidence
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    9.(PT) Madonsela , Amanda
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    10.(PT) Majeke , Nonceba
    -(CH) Front End Cashier
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = 8am:5pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    11.(PT) Maleka , Lebo
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    12.(FT40) Malepe , Makgwale
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    13.(PT) Mashishi , Neo
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    14.(PT) Matanga , Precious
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    15.(PT) Mhali , Ntombizodwa
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    16.(PT) Mhlaba , Patricia
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    17.(PT) Mofokeng , Legeso
    -(CH) Front End Till Packer
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    18.(PT) Mohlala , Mokgaga
    -(CH) Front End Till Packer
    -Mon = 9am:6pm
    -Tue = OFF
    -Wed = 7am:4pm
    -Thu = 7am:4pm
    -Fri = 9am:6pm
    -Sat = 9am:6pm
    -Sun = OFFm
    -Total Net Hr = 40.00
    
    19.(PT) Moleko , Itumeleng
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    20.(FT40) (#2) Moloi , Valencia
    -(CH) Front End till Packer
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    21.(PT) Motsepe , Phumelele
    -(CH) Front End Controller
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    22.(PT) Mphali , Busisiwe
    -(CH) Front End Controller
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    23.(PT) Mphali , Fihliwe
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 9am:6pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    24.(PT) Mthethwa , Nobuhle
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = OFF
    -Total Net Hr = 32.00
    
    25.(PT) Munjovo , Martha
    -(CH) Front End Cashier
    -Mon = 8am:5pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    26.(PT) Ndlovu , Dumisile
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 9am:6pm
    -Sat = 8am:5pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    27.(PT) Ndlovu , Nokwanda
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 9am:6pm
    -Fri = 9am:6pm
    -Sat = 8am:5pm
    -Sun = 9am:6pm
    -Total Net Hr = 40.00
    
    28.(FT40) Nel , Anna
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    29.(PT) Nemakalangani , Jeanet
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    30.(PT) Ngxakeni , Sharon
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    31.(PT) Nhlapo , Jabulile
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    32.(PT) Nkau , Palesa
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    33.(PT) Nkosi , Thembelihle
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    34.(PT) Nxumalo , Bongekile
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    35.(PT) Shihlangolele , Kabelo
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    36.(PT) Sibanyoni , Pamela
    -(CH) Front End Controller
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    37.(PT) Sibiya , Busisiwe
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    38.(PT) Skhosana , Linda
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    39.(PT) Tladi , Octavia
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    40.(PT) Vilakazi , Cynthia
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00";

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(PT) Gwaza, Athi
    -(CH)Front End Cahier
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    2.(PT) Hlengetwa , Sphiwe
    -(CH)Front End Till Packer
    -Mon = 7am:4pm
    -Tue = OFF
    -Wed = 7am:4pm
    -Thu = 7am:4pm
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    3.(PT) Jlane , Busi
    -(CH)Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    4.(PT) Kodwa , Nompumelelo
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    5.(PT) Ledwaba , Boitumelo
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    6.(PT) Mabena , Sithandwa
    -(CH) Front End Till Packer
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    7.(FT40) Mabena , Thethiwe
    -(CH) Front End Controller
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    8.(PT) Mabuela , Confidence
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    9.(PT) Madonsela , Amanda
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    10.(PT) Majeke , Nonceba
    -(CH) Front End Cashier
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = 8am:5pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    11.(PT) Maleka , Lebo
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    12.(FT40) Malepe , Makgwale
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    13.(PT) Mashishi , Neo
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    14.(PT) Matanga , Precious
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    15.(PT) Mhali , Ntombizodwa
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = OFF
    -Fri = OFF
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    16.(PT) Mhlaba , Patricia
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    17.(PT) Mofokeng , Legeso
    -(CH) Front End Till Packer
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    18.(PT) Mohlala , Mokgaga
    -(CH) Front End Till Packer
    -Mon = 9am:6pm
    -Tue = OFF
    -Wed = 7am:4pm
    -Thu = 7am:4pm
    -Fri = 9am:6pm
    -Sat = 9am:6pm
    -Sun = OFFm
    -Total Net Hr = 40.00
    
    19.(PT) Moleko , Itumeleng
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    20.(FT40) (#2) Moloi , Valencia
    -(CH) Front End till Packer
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    21.(PT) Motsepe , Phumelele
    -(CH) Front End Controller
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    22.(PT) Mphali , Busisiwe
    -(CH) Front End Controller
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    23.(PT) Mphali , Fihliwe
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 9am:6pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    24.(PT) Mthethwa , Nobuhle
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = OFF
    -Total Net Hr = 32.00
    
    25.(PT) Munjovo , Martha
    -(CH) Front End Cashier
    -Mon = 8am:5pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    26.(PT) Ndlovu , Dumisile
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 9am:6pm
    -Sat = 8am:5pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    27.(PT) Ndlovu , Nokwanda
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 9am:6pm
    -Fri = 9am:6pm
    -Sat = 8am:5pm
    -Sun = 9am:6pm
    -Total Net Hr = 40.00
    
    28.(FT40) Nel , Anna
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    29.(PT) Nemakalangani , Jeanet
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    30.(PT) Ngxakeni , Sharon
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    31.(PT) Nhlapo , Jabulile
    -(CH) Front End Cashier
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    32.(PT) Nkau , Palesa
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    33.(PT) Nkosi , Thembelihle
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    34.(PT) Nxumalo , Bongekile
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    35.(PT) Shihlangolele , Kabelo
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    36.(PT) Sibanyoni , Pamela
    -(CH) Front End Controller
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    37.(PT) Sibiya , Busisiwe
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    38.(PT) Skhosana , Linda
    -(CH) Front End Till Packer
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    39.(PT) Tladi , Octavia
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    40.(PT) Vilakazi , Cynthia
    -(CH) Front End Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00; 
} else if ($text = 1*6) {
    //This is a second level response where the user selected 1 in the first instance
    $Fruit&VegDepartment = "1.(PT) Joel , Mandisi
    -(CH) Fruit And Veg General Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = OFF
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 32.00
    
    2.(FT40) (#2) Khumalo , Thabo
    -(CH) Fruit And Veg Controlle
    -Mon = 6am:3pm
    -Tue = 6am:3pm
    -Wed = 6am:3pm
    -Thu = 6am:3pm
    -Fri = OFF
    -Sat = OFF
    -Sun = 6am:3pm
    -Total Net Hr = 40.00
    
    3.(FT40) (#2) Manana , Phumile
    -(CH) Fruit And Veg General Assistant
    -Mon = 6am:3pm
    -Tue = OFF
    -Wed = 6am:3pm
    -Thu = 6am:3pm
    -Fri = 6am:3pm
    -Sat = 6am:3pm
    -Sun = 6am:3pm
    -Total Net Hr = 40.00
    
    4.(FT40) (PT) Mbiti , Sifiso
    -(CH) Fruit And Veg Senior Assistant
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    5.(PT) Mkhwanazi , Zodwa
    -(CH) Fruit And Veg General Assistant
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 32.00";

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(PT) Joel , Mandisi
    -(CH) Fruit And Veg General Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = OFF
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 32.00
    
    2.(FT40) (#2) Khumalo , Thabo
    -(CH) Fruit And Veg Controlle
    -Mon = 6am:3pm
    -Tue = 6am:3pm
    -Wed = 6am:3pm
    -Thu = 6am:3pm
    -Fri = OFF
    -Sat = OFF
    -Sun = 6am:3pm
    -Total Net Hr = 40.00
    
    3.(FT40) (#2) Manana , Phumile
    -(CH) Fruit And Veg General Assistant
    -Mon = 6am:3pm
    -Tue = OFF
    -Wed = 6am:3pm
    -Thu = 6am:3pm
    -Fri = 6am:3pm
    -Sat = 6am:3pm
    -Sun = 6am:3pm
    -Total Net Hr = 40.00
    
    4.(FT40) (PT) Mbiti , Sifiso
    -(CH) Fruit And Veg Senior Assistant
    -Mon = OFF
    -Tue = OFF
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    5.(PT) Mkhwanazi , Zodwa
    -(CH) Fruit And Veg General Assistant
    -Mon = OFF
    -Tue = OFF
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 32.00;
} else if ($text = 1*7) {
    //This is a second level response where the user selected 1 in the first instance
    $GroceryDepartment = "1.(PT) Mahaula , Thabo
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    2.(FT40) Makhubedu , Elias
    -Groceries Stockroom Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    3.(FT45) Maphalala , Amos
    -Groceries Stockroom Assistant
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 45.00
    
    4.(PT) Marikele , Matimba Respect
    -Groceries General Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 9am:6pm
    -Sat = 9am:6pm
    -Sun = 9am:6pm
    -Total Net Hr = 32.00
    
    5.(PT) Mashiane , Micky
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 32.00
    
    6.(PT) Mndebele , Phumalane
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = OFF
    -Fri = 9am:6pm
    -Sat = OFF
    -Sun = 8am:5pm
    -Total Net Hr = 32.00
    
    7.(PT) Mojaki , Masobi
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    8.(PT) Mxabo , Mthokozisi
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 9am:6pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    9.(PT) Ngcamphalala , Sboniso
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = OFF
    -Fri = 9am:6pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    10.(PT) (#2) Nyalungu , Pitso
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun =10am:7pm
    -Total Net Hr = 40.00
    
    11.(FT40) Nyalungu , William
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun =10am:7pm
    -Total Net Hr = 40.00
    
    12.(FT40) (#2) Thusi , Kate
    -Groceries General Assistant
    -Mon = 9am:6pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 9am:6pm
    -Fri = 9am:6pm
    -Sat = 9am:6pm
    -Sun = 9am:6pm
    -Total Net Hr = 40.00";

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(PT) Mahaula , Thabo
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    2.(FT40) Makhubedu , Elias
    -Groceries Stockroom Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    3.(FT45) Maphalala , Amos
    -Groceries Stockroom Assistant
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 45.00
    
    4.(PT) Marikele , Matimba Respect
    -Groceries General Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 9am:6pm
    -Sat = 9am:6pm
    -Sun = 9am:6pm
    -Total Net Hr = 32.00
    
    5.(PT) Mashiane , Micky
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 32.00
    
    6.(PT) Mndebele , Phumalane
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = OFF
    -Fri = 9am:6pm
    -Sat = OFF
    -Sun = 8am:5pm
    -Total Net Hr = 32.00
    
    7.(PT) Mojaki , Masobi
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    8.(PT) Mxabo , Mthokozisi
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 9am:6pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    9.(PT) Ngcamphalala , Sboniso
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = OFF
    -Fri = 9am:6pm
    -Sat = 10am:7pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    10.(PT) (#2) Nyalungu , Pitso
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun =10am:7pm
    -Total Net Hr = 40.00
    
    11.(FT40) Nyalungu , William
    -Groceries General Assistant
    -Mon = 10am:7pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun =10am:7pm
    -Total Net Hr = 40.00
    
    12.(FT40) (#2) Thusi , Kate
    -Groceries General Assistant
    -Mon = 9am:6pm
    -Tue = OFF
    -Wed = OFF
    -Thu = 9am:6pm
    -Fri = 9am:6pm
    -Sat = 9am:6pm
    -Sun = 9am:6pm
    -Total Net Hr = 40.00;
} else if ($text = 1*8) {
    //This is a second level response where the user selected 1 in the first instance
    $LiquorDepartment = "1.(PT) Mbatha , Thandeka
    -Liquor Store Cashier
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    2.(FT40) (PT) Nyalungu , Narebotse
    -Liquor Store Controller
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    3.(PT) Shabangu , Tshokolo
    -Liquor Store Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00";

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(PT) Mbatha , Thandeka
    -Liquor Store Cashier
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = 8am:5pm
    -Thu = 8am:5pm
    -Fri = 8am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    2.(FT40) (PT) Nyalungu , Narebotse
    -Liquor Store Controller
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    3.(PT) Shabangu , Tshokolo
    -Liquor Store Cashier
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 10am:7pm
    -Fri = 10am:7pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00;
} else if ($text = 1*9) {
    //This is a second level response where the user selected 1 in the first instance
    $MoneyMarketDepartment = "1.(PT) Lubelo , Lungisile
    -(CH) Money Market Clerk
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    2.(FT40) Mokoena , Sesi
    -(CH) Money Market Clerk
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    3.(FT40) Ndawonde , Mozibele
    -(CH) Money Market Clerk
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    4.(FT40) Nkabinde , Zandile
    -(CH) Money Market Clerk
    -Mon = 10:30am:7:30pm
    -Tue = 10:30am:7:30pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 09:30am:6:30pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    5.(PT) Sambo , Innocent
    -(CH) Money Market Clerk
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 09:30am:6:30pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    6.(FT40) Somo , Adelina
    -(CH) Money Market Clerk
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 09:30am:6:30pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00";

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(PT) Lubelo , Lungisile
    -(CH) Money Market Clerk
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    2.(FT40) Mokoena , Sesi
    -(CH) Money Market Clerk
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 10am:7pm
    -Sat = 10am:7pm
    -Sun = 10am:7pm
    -Total Net Hr = 40.00
    
    3.(FT40) Ndawonde , Mozibele
    -(CH) Money Market Clerk
    -Mon = 8am:5pm
    -Tue = 8am:5pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 8am:5pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    4.(FT40) Nkabinde , Zandile
    -(CH) Money Market Clerk
    -Mon = 10:30am:7:30pm
    -Tue = 10:30am:7:30pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 09:30am:6:30pm
    -Sat = 8am:5pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    5.(PT) Sambo , Innocent
    -(CH) Money Market Clerk
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 09:30am:6:30pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00
    
    6.(FT40) Somo , Adelina
    -(CH) Money Market Clerk
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 09:30am:6:30pm
    -Sat = 9am:6pm
    -Sun = 8am:5pm
    -Total Net Hr = 40.00;
} else if ($text = 1*10) {
    //This is a second level of response where the user selected 1 in the first instance
    $Non-FoodsDepartment = "1.(PT) Mahawuza , Sthembile
    -Non-Foods General Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 9am:6pm
    -Sat = 9am:6pm
    -Sun = 9am:6pm
    -Total Net Hr = 40.00
    
    2.(FT40) Malongwe , Mnyeko
    -Non-Foods Controller
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = 7am:4pm
    -Total Net Hr = 40.00
    
    3.(FT40) Malongwe , Mnyeko
    -Non-Foods General Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = 9am:6pm
    -Thu = 9am:6pm
    -Fri = 9am:6pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 32.00
    
    4.(PT) Sambo , Nompumelelo
    -Non-Foods General Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 9am:6pm
    -Fri = 8am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    5.(PT) Zulu , Bongani
    -Non-Foods General Assistant
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = 7am:4pm
    -Total Net Hr = 40.00";

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(PT) Mahawuza , Sthembile
    -Non-Foods General Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 9am:6pm
    -Sat = 9am:6pm
    -Sun = 9am:6pm
    -Total Net Hr = 40.00
    
    2.(FT40) Malongwe , Mnyeko
    -Non-Foods Controller
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = 7am:4pm
    -Total Net Hr = 40.00
    
    3.(FT40) Malongwe , Mnyeko
    -Non-Foods General Assistant
    -Mon = 9am:6pm
    -Tue = 9am:6pm
    -Wed = 9am:6pm
    -Thu = 9am:6pm
    -Fri = 9am:6pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 32.00
    
    4.(PT) Sambo , Nompumelelo
    -Non-Foods General Assistant
    -Mon = 10am:7pm
    -Tue = 10am:7pm
    -Wed = 10am:7pm
    -Thu = 9am:6pm
    -Fri = 8am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    5.(PT) Zulu , Bongani
    -Non-Foods General Assistant
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = 7am:4pm
    -Total Net Hr = 40.00;
} else if ($text = 1*11) {
    //This is a second level response where the user selected 1 in the first instance
    $PerishablesDepartment = "1.(FT40) (#2) Modjadi , Tsepiso
    -Perishables General Assistant
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = 7am:4pm
    -Total Net Hr = 40.00
    
    2.(FT45) Ngubeni , Richard
    -Perishables General Assistant
    -Mon = 8:30am:5:30pm
    -Tue = 8:30am:5:30pm
    -Wed = 8:30am:5:30pm
    -Thu = 8:30am:5:30pm
    -Fri = 8:30am:5:30pm
    -Sat = 8:30am:5:30pm
    -Sun = OFF
    -Total Net Hr = 45.00
    
    3.(PT) Sithole , Nhlakanipho
    -Perishables General Assistant
    -Mon = 10:am:7pm
    -Tue = 10:am:7pm
    -Wed = 10:am:7pm
    -Thu = 10:am:7pm
    -Fri = OFF
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00";

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(FT40) (#2) Modjadi , Tsepiso
    -Perishables General Assistant
    -Mon = 7am:4pm
    -Tue = 7am:4pm
    -Wed = OFF
    -Thu = OFF
    -Fri = 7am:4pm
    -Sat = 7am:4pm
    -Sun = 7am:4pm
    -Total Net Hr = 40.00
    
    2.(FT45) Ngubeni , Richard
    -Perishables General Assistant
    -Mon = 8:30am:5:30pm
    -Tue = 8:30am:5:30pm
    -Wed = 8:30am:5:30pm
    -Thu = 8:30am:5:30pm
    -Fri = 8:30am:5:30pm
    -Sat = 8:30am:5:30pm
    -Sun = OFF
    -Total Net Hr = 45.00
    
    3.(PT) Sithole , Nhlakanipho
    -Perishables General Assistant
    -Mon = 10:am:7pm
    -Tue = 10:am:7pm
    -Wed = 10:am:7pm
    -Thu = 10:am:7pm
    -Fri = OFF
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00;
} else if ($text = 1*12) {
    //This is the second level response where the user selected 1 in the first instance
    $ReceivingDepartment = "1.(FT40) Kgopane , Thulane
    -(CH) Receiving Admin Clerk
    -Mon = 7:am:5pm
    -Tue = 7:am:5pm
    -Wed = 7:am:5pm
    -Thu = 7:am:5pm
    -Fri = 7am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    2.(FT40) Kodisa , Lettie
    -(CH) Receiving Clerk
    -Mon = 7:am:5pm
    -Tue = 7:am:5pm
    -Wed = 7:am:5pm
    -Thu = 7:am:5pm
    -Fri = 7:am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    3.(FT40) Mabena , Olga
    -(CH) Receiving Admin Clerk
    -Mon = 7:30am:4:30pm
    -Tue = 7:30am:4:30pm
    -Wed = 7:30am:4:30pm
    -Thu = 7:30am:4:30pm
    -Fri =7:30am:4:30pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    4.(PT) Mnyakeni , Given
    -Receiving General Assistant
    -Mon = 7:am:5pm
    -Tue = 7:am:5pm
    -Wed = 7:am:5pm
    -Thu = 7:am:5pm
    -Fri = 7:am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    5.(PT) Zikhale , Siphiwe
    -Receiving Clerk
    -Mon = 7:am:5pm
    -Tue = 7:am:5pm
    -Wed = 7:am:5pm
    -Thu = 7:am:5pm
    -Fri = 7:am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00";

    //This is a terminal request. Note how we start with END
    $resopnse = "END Your schedule is".1.(FT40) Kgopane , Thulane
    -(CH) Receiving Admin Clerk
    -Mon = 7:am:5pm
    -Tue = 7:am:5pm
    -Wed = 7:am:5pm
    -Thu = 7:am:5pm
    -Fri = 7am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    2.(FT40) Kodisa , Lettie
    -(CH) Receiving Clerk
    -Mon = 7:am:5pm
    -Tue = 7:am:5pm
    -Wed = 7:am:5pm
    -Thu = 7:am:5pm
    -Fri = 7:am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    3.(FT40) Mabena , Olga
    -(CH) Receiving Admin Clerk
    -Mon = 7:30am:4:30pm
    -Tue = 7:30am:4:30pm
    -Wed = 7:30am:4:30pm
    -Thu = 7:30am:4:30pm
    -Fri =7:30am:4:30pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    4.(PT) Mnyakeni , Given
    -Receiving General Assistant
    -Mon = 7:am:5pm
    -Tue = 7:am:5pm
    -Wed = 7:am:5pm
    -Thu = 7:am:5pm
    -Fri = 7:am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00
    
    5.(PT) Zikhale , Siphiwe
    -Receiving Clerk
    -Mon = 7:am:5pm
    -Tue = 7:am:5pm
    -Wed = 7:am:5pm
    -Thu = 7:am:5pm
    -Fri = 7:am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00;
} else if ($text = 1*13) {
    //This is the second level response where the user selected 1 in the first instance
    $StockDepartment = "1.(FT45) Kgopa , Patience
    -(CH) Stock Counting Clerk
    -Mon = 8:am:5pm
    -Tue = 8:am:5pm
    -Wed = 8:am:5pm
    -Thu = 8:am:5pm
    -Fri = 8:am:5pm
    -Sat =8:am:5pm
    -Sun = OFF
    -Total Net Hr = 45.00
    
    2.(FT45) Kunene , Lilian
    -(CH) Stock Counting Clerk
    -Mon = 7:am:4pm
    -Tue = 7:am:4pm
    -Wed = 7:am:4pm
    -Thu = 7:am:4pm
    -Fri = 7:am:4pm
    -Sat = 7:am:4pm
    -Sun = OFF
    -Total Net Hr = 45.00
    
    3.(FT40) Mofokeng , Rebecca
    -(CH) Stock Counting Clerk
    -Mon = 7:am:4pm
    -Tue = 7:am:4pm
    -Wed = 7:am:4pm
    -Thu = 7:am:4pm
    -Fri = 7:am:4pm
    -Sat = 7:am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    4.(FT40) Mtshweni , Nkosinathi
    -(CH) Stock Counting Clerk
    -Mon = 7:am:4pm
    -Tue = 7:am:4pm
    -Wed = 7:am:4pm
    -Thu = 7:am:4pm
    -Fri = 7:am:4pm
    -Sat = 7:am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    5.(FT40) (PT) Phelembe , Thandeka
    -(CH) Stock Counting Clerk
    -Mon = 7:am:4pm
    -Tue = 7:am:4pm
    -Wed = 7:am:4pm
    -Thu = 7:am:4pm
    -Fri = 7:am:4pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00";

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(FT45) Kgopa , Patience
    -(CH) Stock Counting Clerk
    -Mon = 8:am:5pm
    -Tue = 8:am:5pm
    -Wed = 8:am:5pm
    -Thu = 8:am:5pm
    -Fri = 8:am:5pm
    -Sat =8:am:5pm
    -Sun = OFF
    -Total Net Hr = 45.00
    
    2.(FT45) Kunene , Lilian
    -(CH) Stock Counting Clerk
    -Mon = 7:am:4pm
    -Tue = 7:am:4pm
    -Wed = 7:am:4pm
    -Thu = 7:am:4pm
    -Fri = 7:am:4pm
    -Sat = 7:am:4pm
    -Sun = OFF
    -Total Net Hr = 45.00
    
    3.(FT40) Mofokeng , Rebecca
    -(CH) Stock Counting Clerk
    -Mon = 7:am:4pm
    -Tue = 7:am:4pm
    -Wed = 7:am:4pm
    -Thu = 7:am:4pm
    -Fri = 7:am:4pm
    -Sat = 7:am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    4.(FT40) Mtshweni , Nkosinathi
    -(CH) Stock Counting Clerk
    -Mon = 7:am:4pm
    -Tue = 7:am:4pm
    -Wed = 7:am:4pm
    -Thu = 7:am:4pm
    -Fri = 7:am:4pm
    -Sat = 7:am:4pm
    -Sun = OFF
    -Total Net Hr = 40.00
    
    5.(FT40) (PT) Phelembe , Thandeka
    -(CH) Stock Counting Clerk
    -Mon = 7:am:4pm
    -Tue = 7:am:4pm
    -Wed = 7:am:4pm
    -Thu = 7:am:4pm
    -Fri = 7:am:4pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00;   
} else if ($text = 1*14) {
    //This is a second level response where the user selected 1 in the first instance
    $WineDepartment = "1.(FT40) Maluleke , Sphiwe
    -Wine Assistant
    -Mon = 9:am:6pm
    -Tue = 9:am:6pm
    -Wed = 9:am:6pm
    -Thu = 8:am:5pm
    -Fri = 8:am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00";

    //This is a terminal request. Note how we start with END
    $response = "END Your schedule is".1.(FT40) Maluleke , Sphiwe
    -Wine Assistant
    -Mon = 9:am:6pm
    -Tue = 9:am:6pm
    -Wed = 9:am:6pm
    -Thu = 8:am:5pm
    -Fri = 8:am:5pm
    -Sat = OFF
    -Sun = OFF
    -Total Net Hr = 40.00;

}
 //echo the response to the API. The response depends on the statement that is fullfillied in each instance
 header('content.type; text/plain');
 echo $response;


?>