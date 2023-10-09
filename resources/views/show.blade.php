<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Show Movie Detail</title>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-title">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Year</th>
                            <th scope="col">Rated</th>
                            <th scope="col">Released</th>
                            <th scope="col">Runtime</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Director</th>
                            <th scope="col">Writer</th>
                            <th scope="col">Actors</th>
                            <th scope="col">Plot</th>
                            <th scope="col">Language</th>
                            <th scope="col">Country</th>
                            <th scope="col">Awards</th>
                            <th scope="col">Poster</th>
                            <th scope="col">Metascore</th>
                            <th scope="col">imdbRating</th>
                            <th scope="col">imdbVotes</th>
                            <th scope="col">imdbID</th>
                            <th scope="col">Type</th>
                            <th scope="col">DVD</th>
                            <th scope="col">BoxOffice</th>
                            <th scope="col">Production</th>
                            <th scope="col">Website</th>
                            <th scope="col">Response</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="col">{{$data['Title']}}</td>
                            <td scope="col">{{$data['Year']}}</td>
                            <td scope="col">{{$data['Rated']}}</td>
                            <td scope="col">{{$data['Released']}}</td>
                            <td scope="col">{{$data['Runtime']}}</td>
                            <td scope="col">{{$data['Genre']}}</td>
                            <td scope="col">{{$data['Director']}}</td>
                            <td scope="col">{{$data['Writer']}}</td>
                            <td scope="col">{{$data['Actors']}}</td>
                            <td scope="col">{{$data['Plot']}}</td>
                            <td scope="col">{{$data['Language']}}</td>
                            <td scope="col">{{$data['Country']}}</td>
                            <td scope="col">{{$data['Awards']}}</td>
                            <td scope="col"><img src="{{$data['Poster']}}"></td>
                            <td scope="col">{{$data['Metascore']}}</td>
                            <td scope="col">{{$data['imdbRating']}}</td>
                            <td scope="col">{{$data['imdbVotes']}}</td>
                            <td scope="col">{{$data['imdbID']}}</td>
                            <td scope="col">{{$data['Type']}}</td>
                            <td scope="col">{{$data['DVD']}}</td>
                            <td scope="col">{{$data['BoxOffice']}}</td>
                            <td scope="col">{{$data['Production']}}</td>
                            <td scope="col">{{$data['Website']}}</td>
                            <td scope="col">{{$data['Response']}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
