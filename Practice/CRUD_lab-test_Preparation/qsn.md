## 🎯 Practice Questions for Your CRUD Operations Lab Test

---

### 1. Database Design & Creation

- **Q1:** Create a MySQL database named `library_management`.
- **Q2:** Design and create a table `books` with the following columns:

  - `book_id` (INT, PRIMARY KEY, AUTO_INCREMENT)
  - `title` (VARCHAR(100))
  - `author` (VARCHAR(50))
  - `published_year` (YEAR)
  - `genre` (VARCHAR(30))
  - `quantity` (INT)

_Practice:_ Write the SQL query to create this table.

---

### 2. **Create Operation (Insert)**

- **Q3:** Write a PHP script that accepts book details from a form and inserts a new book record into the `books` table.
- **Q4:** Validate the form inputs to ensure no field is empty before inserting.

_Practice:_ Build the form in HTML and the PHP backend script that processes the form submission and inserts data into MySQL.

---

### 3. **Read Operation (Select)**

- **Q5:** Write a PHP script that fetches all books from the `books` table and displays them in an HTML table.
- **Q6:** Modify the script to display only books published after the year 2010.

_Practice:_ Use `mysqli` or `PDO` to connect to the database and run SELECT queries, then output results as a dynamic HTML table.

---

### 4. **Update Operation**

- **Q7:** Write a PHP script to update the quantity of a specific book using its `book_id`.
- **Q8:** Create a form that allows the user to update book details (title, author, quantity). Use pre-filled form inputs with current data.

_Practice:_ Fetch the current book info, display it in a form, then update the database upon form submission.

---

### 5. **Delete Operation**

- **Q9:** Write a PHP script to delete a book from the database given its `book_id`.
- **Q10:** Add a “Delete” button next to each book record in the list which triggers the deletion of that record.

_Practice:_ Handle the delete request securely using POST method or confirmation dialogs.

---

### 6. **Bonus Practice: Combined Operations**

- **Q11:** Build a single page PHP script that lists all books with options to **Edit** and **Delete**. The Edit button loads a form on the same page to update the record.
- **Q12:** Implement input sanitization and prepared statements to prevent SQL injection.

---

## Step-by-Step Example Breakdown (For One Task)

Let's take **Insert (Create)** as an example.

1. Create `books` table in MySQL.
2. Build an HTML form to take book details (title, author, year, genre, quantity).
3. Connect PHP to MySQL database using `mysqli_connect()`.
4. Write PHP code to get POST data from the form.
5. Use `INSERT INTO` SQL query to insert data into `books`.
6. Show success/failure message.
