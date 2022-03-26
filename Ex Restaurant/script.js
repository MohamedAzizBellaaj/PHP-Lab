const nbSandwichs = document.querySelector("#nbSandwichs");
const ul = document.querySelector("ul");
nbSandwichs.addEventListener("input", () => {
  ul.innerHTML = "";
  // @ts-ignore
  for (var i = 0; i < nbSandwichs.value; i++) {
    ul.innerHTML += `<li> <label for="type">Type : </label>
        <select name="type${i}" id="type${i}" class="form-select">
          <option value="viande">viande</option>
          <option value="poulet">poulet</option>
          <option value="escalope">escalope</option>
        </select>
        <p>Options :</p>
        <div class="form-check">
          <input
          name="harissa${i}"
            class="form-check-input"
            type="checkbox"
            value="harissa"
            id="harissa${i}"
          />
          <label for="harissa${i}"> harissa </label>
        </div>
        <div class="form-check">
          <input
            name="salade${i}"
            class="form-check-input"
            type="checkbox"
            value="salade"
            id="salade${i}"
            
          />
          <label for="salade${i}"> salade </label>
        </div>
        <div class="form-check">
          <input
            name="mayo${i}"
            class="form-check-input"
            type="checkbox"
            value="mayo"
            id="mayo${i}"
          />
          <label for="mayo${i}"> mayo </label>
        </div>
        <br />
        </li>`;
  }
});
