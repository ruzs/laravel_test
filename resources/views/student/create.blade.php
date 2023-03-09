
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create</title>
</head>
<body>
  <h1>create</h1>
  <h2>
    <a href="{{route('students.index')}}">Index</a>
    <a href="{{route('students.hello')}}">hello</a>
    <a href="{{route('students.excel')}}">excel</a>
  </h2>
  @verbatim
  <h1>Hello, {{ data['name'] }}</h1>
  <h2>age - {{ data['age'] }}</h2>
  @endverbatim
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

</body>
</html>