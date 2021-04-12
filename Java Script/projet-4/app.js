const form = document.querySelector(".add");
let list = document.querySelector(".todos");

function addTodo(toDo) {
    const item = `
    <li style="list-style: none;
    border: 3px solid;
    border-radius: 1rem;
    color: wheat;
    padding: 0.5rem;
    display: flex;
    justify-content: space-between;
    margin: 12px 142px 12px 142px;
    padding: 8px 15px 8px 20px;">
        <span>${toDo}</span>
        <svg class="delete" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg>
      </li>`;
    list.innerHTML += item
};

form.addEventListener("submit", (e) => {
    e.preventDefault();

    const todo = form.add.value;
    if (todo.length > 0) {
        addTodo(todo)
        form.reset()
    } else {
        alert("pls enter a valid");
    }

});

// Delete todo
list.addEventListener('click', (e) => {
        if (e.target.classList.contains('delete')) {
            e.target.parentElement.remove()
        }
    })