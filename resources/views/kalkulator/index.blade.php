<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haikal</title>
    <style>
        body{
        background-color:cyan;
    }
    table {
  border: 2px solid black;
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  border: none;
  outline: solid black;
  border-radius: 20px;
  background-color: darkgray;
  width: 200px;
  box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0.5);
  background-image: linear-gradient(to left, blue, violet);
}
td {
    width: 100px;
    padding: 25px;

}
tr {
    width: 100px;
    padding: 25px;
}
input[type="number"] {
width: 80%;
padding: 10px;
border: 2px solid black   ;
border-radius: 30px;
text-align: justify;
box-shadow: inset;
font-size: large;
}

input[type="submit"] {
width: 80%;
padding: 20px 40px;
background-color: green;
color: white;
border: none;
border-radius: 30px;
cursor: pointer;
margin-bottom: 10px;
font-size: large;
font-weight: bold;
}
input[type="submit"]:hover {
background-color: red;
}
input[type="reset"]{
width: 80%;
padding: 20px 40px;
background-color: green;
color: white;
border: none;
border-radius: 30px;
cursor: pointer;
margin-bottom: 10px;
font-size: large;
font-weight: bold;
}
input[type="reset"]:hover {
background-color: red;
}
.hasil {
    border-color: 10px solid black;
    margin-bottom: 10px; 
    font-weight: bold; 
    text-align: center;
}

    </style>
</head>
<body>
    <h1><center>KALKULATOR</center></h1>
    <center>
        <div class="container">
         <form action=" {{ route('proses.store') }} " method="post">        
             @csrf
             <br>
             <table border="1" height='300'>

             <tr>
                <td colspan="2"><center>INPUT ANGKA PERTAMA :</center> <input type="number" name="a" id=""></td>
                <td colspan="2" rowspan="2 "><input type="reset"></td>
             </tr>
             <tr>
                <td colspan="2"><center>INPUT ANGKA KEDUA :</center> <input type="number" name="b" id=""></td>
             </tr>
             <tr>
                <td colspan="4"><center><label class="hasil">HASIL</label></center></td>
             </tr>
             <tr>
                <td><input type="submit" value="+" name="op"></td>
                <td><input type="submit" value="-" name="op"></td>
                <td><input type="submit" value="x" name="op"></td>
                <td><input type="submit" value="/" name="op"></td>
             </tr>
             <tr>
                <td colspan="4"><center>
                    NAMA   :   Haikal
                    <br>
                    KELAS  :   XII PPLG 2
                </center>
            </td>
             </tr>

             </table>
         </form>   
        </div>
    </center>
</body>
</html>