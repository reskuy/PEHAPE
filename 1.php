
    <script>
var data = function json(name, address, hobbies = [], is_married, school = {}, skills = []) {
this.name = name,this.address = address,this.hobbies = hobbies,this.is_married = is_married,this.school = school,this.skills = skills
        }
isi = new data(
'Reski Widhianto','Perum Ariesco Blok Ci No 31, Samarinda',['baca','main','nonton','jalan'],false,
            { highSchool: 'SMK 7 Samarinda', univesity: 'None' },
            [
             { name: 'Front End : |HTML - CSS - JS|', score: 69 },
             { name: 'Back End : |PHP native - MYSQL - NodeJs|', score: 69 },
            ]
        )
console.log(isi)
 document.write(JSON.stringify(isi))
    </script>
