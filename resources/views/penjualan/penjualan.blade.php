<html>
    <head>
        <title>Penjualan POS</title>
        <style>
            /* CSS untuk styling */
            .container {
                display: flex;
                flex-direction: row;
            }
            .container > div {
                flex: 1;
                padding: 15px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid pink;
                text-align: left;
                padding: 8px;
                cursor: pointer; /* Menambahkan cursor pointer */
            }
            th {
                background-color: lightblue;
            }
            tr:hover {
                background-color: lightblue; /* Mengubah warna latar belakang saat hover */
            }
        </style>
    </head>
    <body>
        <h1>Selamat Datang di Halaman Transaksi Penjualan!</h1>
        <div class="container">
            <div>
                <h2>List Products</h2>
                <table id="productTable">
                    <tr>
                        <th>ID Product</th>
                        <th>Nama Product</th>
                        <th>Harga</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Burger</td>
                        <td>15000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sushi</td>
                        <td>20000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Spageti</td>
                        <td>22000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Air Mineral</td>
                        <td>3500</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Tea</td>
                        <td>4000</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Coffee</td>
                        <td>4000</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Facial Wash</td>
                        <td>50000</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Moisturizer</td>
                        <td>65000</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Sunscreen</td>
                        <td>72500</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Minyak Kayu Putih</td>
                        <td>23000</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Obat Flu</td>
                        <td>3000</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Pewangi pakaian</td>
                        <td>25000</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Detergen</td>
                        <td>30000</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Sabun Cuci Piring</td>
                        <td>10000</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Pewangi Pakaian</td>
                        <td>25400</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Susu Bayi</td>
                        <td>180000</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Sabun Bayi</td>
                        <td>5000</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Popok Bayi</td>
                        <td>35000</td>
                    </tr>
                </table>
            </div>
            <div>
                <h2>Struk Pembayaran</h2>
                <table id="orderTable">
                    <tr>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </table>
                <p><br>Total: <span id="totalPrice">0</span></p>
                <label for="cash">Tunai:</label>
                <input type="number" id="cash" oninput="calculateChange()">
                <p>Kembali: <span id="change">0</span></p>
            </div>
        </div>
        <script>
            //Menambahkan pesanan ke tabel rekap sesuai dengan jumlah yang diinputkan
            function addToOrder(id, name, price) {
                let table = document.getElementById("orderTable");
                let qty = prompt("Masukkan jumlah produk");
                if (qty !== null && !isNaN(qty) && qty !== '') {
                    let row = table.insertRow();
                    let totalPrice = parseInt(qty) * parseInt(price);
                    row.innerHTML = `<td>${id}</td><td>${name}</td><td>${qty}</td><td>${totalPrice}</td><td><button onclick="removeOrder(this)">Delete</button></td>`;
                    calculateTotalPrice();
                } else if (qty !== '') {
                    alert("Jumlah tidak valid!");
                }
            }
        
            //Menghapus pesanan dari tabel rekap
            function removeOrder(button) {
                let row = button.parentNode.parentNode;
                row.parentNode.removeChild(row);
                calculateTotalPrice();
            }
        
            //Menghitung total harga pesanan
            function calculateTotalPrice() {
                let totalPrice = 0;
                let table = document.getElementById("orderTable");
                for (let i = 1; i < table.rows.length; i++) {
                    totalPrice += parseInt(table.rows[i].cells[3].innerHTML);
                }
                document.getElementById("totalPrice").innerText = totalPrice;
                calculateChange();
            }
        
            //Menghitung kembalian
            function calculateChange() {
                let totalPrice = parseInt(document.getElementById("totalPrice").innerText);
                let cash = parseInt(document.getElementById("cash").value);
                let change = cash - totalPrice;
                if (!isNaN(change)) {
                    document.getElementById("change").innerText = (change >= 0 ? change : 0);
                }
            }
        
            //Menambahkan event listener pada setiap baris tabel produk
            let productRows = document.querySelectorAll("#productTable tr");
            productRows.forEach(row => {
                row.addEventListener("click", () => {
                    let cells = row.querySelectorAll("td");
                    let id = cells[0].innerText;
                    let name = cells[1].innerText;
                    let price = cells[2].innerText;
                    addToOrder(id, name, price);
                });
            });
        </script>
        <br>
        <a href="{{ url('/home') }}">Home</a>
    </body>
</html>