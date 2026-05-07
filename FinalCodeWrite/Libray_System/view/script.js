document.addEventListener("DOMContentLoaded", function() {
    fetchBooks();

    // Add Book
    document.getElementById("bookForm").addEventListener("submit", function(e) {
        e.preventDefault();
        let formData = new FormData();
        formData.append("action", "insert");
        formData.append("title", document.getElementById("title").value);
        formData.append("author", document.getElementById("author").value);
        formData.append("category", document.getElementById("category").value);
        formData.append("status", document.getElementById("status").value);

        fetch("../controller/bookController.php", {
            method: "POST",
            body: formData
        }).then(res => res.json())
          .then(data => {
              alert(data.message);
              fetchBooks();
          });
    });
});

// Fetch Books
function fetchBooks() {
    let formData = new FormData();
    formData.append("action", "fetch");

    fetch("../controller/bookController.php", {
        method: "POST",
        body: formData
    }).then(res => res.json())
      .then(data => {
          let tbody = document.querySelector("#bookTable tbody");
          tbody.innerHTML = "";
          data.forEach(book => {
              tbody.innerHTML += `
                  <tr>
                      <td>${book.id}</td>
                      <td>${book.title}</td>
                      <td>${book.author}</td>
                      <td>${book.category}</td>
                      <td>${book.status}</td>
                      <td>
                          <button onclick="deleteBook(${book.id})">Delete</button>
                      </td>
                  </tr>`;
          });
      });
}

// Delete Book
function deleteBook(id) {
    let formData = new FormData();
    formData.append("action", "delete");
    formData.append("id", id);

    fetch("../controller/bookController.php", {
        method: "POST",
        body: formData
    }).then(res => res.json())
      .then(data => {
          alert(data.message);
          fetchBooks();
      });
}
