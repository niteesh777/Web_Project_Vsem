$(document).ready(() => {
  $('#searchForm').on('submit', (e) => {
    let searchText = $('#searchText').val();
    getMovies(searchText);
    e.preventDefault();
  });
});


var mlst = [];
var plst=[];

function getMovies(searchText){
  axios.get(`http://www.omdbapi.com/?s=${searchText}&apikey=9aeff8`)
    .then((response) => {
      console.log(response);
      let movies = response.data.Search;
      let output = '';
      $.each(movies, (index, movie) => {
        output += `
          <div class="col-md-3">
            <div class="well text-center">
              <img style="border-radius:5px" src="${movie.Poster}" alt="altmovie"/>
              <h5>${movie.Title}</h5>
              <a onclick="movieSelected('${movie.imdbID}')" class="btn btn-secondary" href="movie.php" >Info</a>
              <a onclick="Addentlist('${movie.Title}','${movie.Poster}')" class="btn btn-secondary" href="#" style="background: linear-gradient(45deg, rgb(223, 204, 101),rgb(214, 224, 155)); color: rgb(30, 31, 24);font-weight:bold;">Add to list</a>
            </div>
          </div>
        `;
      });

      $('#movies').html(output);
    })
    .catch((err) => {
      console.log(err);
    });
}



	function Addentlist(movie,poster) {
    
    console.log(movie);
    console.log(poster);
		$.ajax({
				url: "addlist.php",
				type: "POST",
				data: {
					movie: movie,
          poster: poster,	
        },
        success: function (data) {
          console.log('data: '+data);
        },
        
				error: function(error) {
          console.log('Error: ' + error);
        }
      });
      console.log("hellonew");
		
	}

function movieSelected(id){
  sessionStorage.setItem('movieId', id);
  window.location = 'movie.html';
  return false;
}


function Removelist(moviename,i)
{

  console.log(moviename);

  $.ajax({
      url: "Removelist.php",
      type: "POST",
      data: {
        movie: moviename,
      },
      success: function (data) {
        console.log('data: '+data);
      },
      
      error: function(error) {
        console.log('Error: ' + error);
      }
    });
    document.getElementById(`demo${i}`).style.display = "none";


}

function getMovie(){
  let movieId = sessionStorage.getItem('movieId');

  axios.get(`http://www.omdbapi.com/?i=${movieId}&apikey=9aeff8`)
    .then((response) => {
      console.log(response);
      let movie = response.data;

      let output =`
        <div class="row">
          <div class="col-md-4">
            <img src="${movie.Poster}" class="thumbnail">
          </div>
          <div class="col-md-8">
            <h2>${movie.Title}</h2>
            <ul class="list-group">
              <li class="list-group-item"><strong>Genre:</strong> ${movie.Genre}</li>
              <li class="list-group-item"><strong>Released:</strong> ${movie.Released}</li>
              <li class="list-group-item"><strong>Rated:</strong> ${movie.Rated}</li>
              <li class="list-group-item"><strong>IMDB Rating:</strong> ${movie.imdbRating}</li>
              <li class="list-group-item"><strong>Director:</strong> ${movie.Director}</li>
              <li class="list-group-item"><strong>Writer:</strong> ${movie.Writer}</li>
              <li class="list-group-item"><strong>Actors:</strong> ${movie.Actors}</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="well">
            <h3>Plot</h3>
            ${movie.Plot}
            <hr>
            <a href="http://imdb.com/title/${movie.imdbID}" target="_blank" class="btn btn-secondary" style="background: linear-gradient(45deg, rgb(223, 204, 101),rgb(214, 224, 155)); color: rgb(30, 31, 24);font-weight:bold;">View IMDB</a>
            <a href="ent.php" class="btn btn-default">Go Back To Search</a>
          </div>
        </div>
      `;

      $('#movie').html(output);
    })
    .catch((err) => {
      console.log(err);
    });
}
