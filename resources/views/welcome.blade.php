<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake news</title>
    <style>
        h1{
            text-align: center;
        }
        .container{
            background-color: lime;
            padding: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- <h1 class="">Kathmandu Khabar</h1> -->
   <h1> {{$header}} </h1>

@foreach($articles as $value)
    <div class="container">
        <h2>{{ $value['title']}}</h2>
        <p> {{ $value['desc']}}</p>
    </div>
@endforeach


   <!-- <div>
    <h1>News one</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos atque sint vitae quibusdam deleniti nemo perferendis, ut adipisci natus et illo quaerat sed laboriosam expedita officia magnam quos ipsum provident!
    Ratione reiciendis vitae quos atque autem aliquid odio repellendus eum ullam rerum adipisci quas corporis voluptatibus, delectus explicabo ad velit laudantium nihil. Provident non labore facere dolores iste ullam doloremque.</p>
   </div>
   <div>
    <h1>News two</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos atque sint vitae quibusdam deleniti nemo perferendis, ut adipisci natus et illo quaerat sed laboriosam expedita officia magnam quos ipsum provident!
    Ratione reiciendis vitae quos atque autem aliquid odio repellendus eum ullam rerum adipisci quas corporis voluptatibus, delectus explicabo ad velit laudantium nihil. Provident non labore facere dolores iste ullam doloremque.</p>
   </div> -->
   
</body>
</html>