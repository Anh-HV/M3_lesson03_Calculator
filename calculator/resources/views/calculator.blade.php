<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <style>
      .title {
         width: 500px;
         margin-bottom: 10px;
         text-align: center;
         color: white;
         border: solid black 2px;
         height: 40px;
         background-color: blue;
         font-size: 25px;
      }

      table {
         width: 500px;
      }

      input[type="button"] {
         color: whitesmoke;
         border: solid black 2px;
         width: 100%
      }
      input[type="submit"] {
         color: whitesmoke;
         border: solid black 2px;
         width: 100%
      }

      input[type="text"] {
         background-color: white;
         border: solid black 2px;
         width: 100%;
         height: 40px;
      }
   </style>
</head>

<body>

   <div class=title>Calculator</div>
   <form method="Post" action="{{ route('calculate') }}">
   @csrf

      <table border="1">
         <tr>
            <td colspan="3"><input type="text" id="result" name ="result" 
            value= "{{$result}}"
               />
               </td>
            <!-- clr() function will call clr to clear all value -->
            <td><input type="button" class="btn btn-primary" value="c" onclick="clr()" /> </td>
         </tr>
         <tr>
            <!-- create button and assign value to each button -->
            <!-- dis("1") will call function dis to display value -->
            <td><input type="button" class="btn btn-primary" value="1" onclick="dis('1')" /> </td>
            <td><input type="button" class="btn btn-primary" value="2" onclick="dis('2')" /> </td>
            <td><input type="button" class="btn btn-primary" value="3" onclick="dis('3')" /> </td>
            <td><input type="button" class="btn btn-primary" value="/" onclick="dis('/')" /> </td>
         </tr>
         <tr>
            <td><input type="button" class="btn btn-primary" value="4" onclick="dis('4')" /> </td>
            <td><input type="button" class="btn btn-primary" value="5" onclick="dis('5')" /> </td>
            <td><input type="button" class="btn btn-primary" value="6" onclick="dis('6')" /> </td>
            <td><input type="button" class="btn btn-primary" value="-" onclick="dis('-')" /> </td>
         </tr>
         <tr>
            <td><input type="button" class="btn btn-primary" value="7" onclick="dis('7')" /> </td>
            <td><input type="button" class="btn btn-primary" value="8" onclick="dis('8')" /> </td>
            <td><input type="button" class="btn btn-primary" value="9" onclick="dis('9')" /> </td>
            <td><input type="button" class="btn btn-primary" value="+" onclick="dis('+')" /> </td>
         </tr>
         <tr>
            <td><input type="button" class="btn btn-primary" value="." onclick="dis('.')" /> </td>
            <td><input type="button" class="btn btn-primary" value="0" onclick="dis('0')" /> </td>
            <!-- solve function call function solve to evaluate value -->
            <td><input type="submit" class="btn btn-primary" value="=" /> </td>
            <td><input type="button" class="btn btn-primary" value="*" onclick="dis('*')" /> </td>
         </tr>
      </table>
   </form>
   <script>
      function dis(value) {
         document.getElementById("result").value += value;
      }

      function clr() {
         document.getElementById("result").value = "";
      }
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>