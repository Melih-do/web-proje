let id = 1;

const apiData = {
  url: 'https://pokeapi.co/api/v2/',
  type: 'pokemon',
}

const {url, type} = apiData

const apiUrl = `${url}${type}/${id}`

const generateHtml = (data) => {
  console.log(data)
  const html = `
    <div class="name">${data.name}</div>
    <img src=${data.sprites.front_default}>
    <div class="details">
      <span>Height: ${data.height}</span>
      <span>Weight: ${data.weight}</span>
    </div>
  `
  const pokemonDiv = document.querySelector('.pokemon')
  pokemonDiv.innerHTML = html
}

const fetchPokemon = () => {
  fetch(`${url}${type}/${id}`)
    .then( (data) => {
      if(data.ok){
        return data.json()
      }
      throw new Error('Response not ok.'); 
    })
    .then( pokemon => generateHtml(pokemon))
    .catch( error => console.error('Error:', error))
}
fetchPokemon();
setInterval(() => {
  fetchPokemon();
  id++;
}, 2000);
    