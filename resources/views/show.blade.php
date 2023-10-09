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
                        <thead>
                        <tr>
                            <th class="col-sm-2">Title</th>
                            <td scope="col">{{$data['Title']}}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col">Year</th>
                            <td scope="col">{{$data['Year']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Rated</th>
                            <td scope="col">{{$data['Rated']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Released</th>
                            <td scope="col">{{$data['Released']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Runtime</th>
                            <td scope="col">{{$data['Runtime']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Genre</th>
                            <td scope="col">{{$data['Genre']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Director</th>
                            <td scope="col">{{$data['Director']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Writer</th>
                            <td scope="col">{{$data['Writer']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Actors</th>
                            <td scope="col">{{$data['Actors']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Plot</th>
                            <td scope="col">{{$data['Plot']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Language</th>
                            <td scope="col">{{$data['Language']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Country</th>
                            <td scope="col">{{$data['Country']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Awards</th>
                            <td scope="col">{{$data['Awards']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Poster</th>
                            <td scope="col">{{$data['Poster']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Metascore</th>
                            <td scope="col">{{$data['Metascore']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">imdbRating</th>
                            <td scope="col">{{$data['imdbRating']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">imdbVotes</th>
                            <td scope="col">{{$data['imdbVotes']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">imdbID</th>
                            <td scope="col">{{$data['imdbID']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Type</th>
                            <td scope="col">{{$data['Type']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">DVD</th>
                            <td scope="col">{{$data['DVD']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">BoxOffice</th>
                            <td scope="col">{{$data['BoxOffice']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Production</th>
                            <td scope="col">{{$data['Production']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Website</th>
                            <td scope="col">{{$data['Website']}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Response</th>
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
