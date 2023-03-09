
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index</title>
</head>
<body>
  <h1>index</h1>
  <h2>
    <a href="{{route('students.create')}}">Create</a>
    <a href="{{route('students.hello')}}">hello</a>
    <a href="{{route('students.excel')}}">excel</a>
    <a href="{{route('students.store')}}">store</a>
    <a href="{{route('students.child')}}">child</a>
    <a href="{{route('students.app')}}">App</a>
  </h2>

    <h1>Hello, {{ $data['name'] }}</h1>
    <h2>age - {{ $data['age'] }}</h2>
    @{{is}}

    <table>
        @if($data['age']>18)
        <br>
        @@foreach ($data2 as $item)
          @foreach ($data2 as $item)
          <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['price'] }}</td>
          </tr>
          @endforeach
        @endif
    </table>
    
    {{dd(url("/hello"))}}
</body>
</html>