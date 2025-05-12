<div id="header" align="center">
  <img src="https://media.giphy.com/media/M9gbBd9nbDrOTu1Mqx/giphy.gif" width="100"/>
</div>
<div id="badges" align="center">
  <a href="https://www.linkedin.com/in/kevin-christianto/">
    <img src="https://img.shields.io/badge/LinkedIn-blue?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn Badge"/>
  </a>
</div>
<div id="github" align="center">
    <img src="https://komarev.com/ghpvc/?username=kevhoz&style=flat-square&color=blue" alt=""/>
</div>
<div id="body-header" align="center">
<h1>
  Final Testing
</h1>
</div>
### :hammer_and_wrench: Languages and Tools:
<div>
  <img src="https://github.com/devicons/devicon/blob/master/icons/php/php-original.svg" title="PHP"  alt="PHP" width="40" height="40"/>&nbsp;
</div>

### :woman_technologist: This repository cover:

1. Backend and Frontend Application
2. Testing Question

<div id="application">
<h2>
  Backend and Frontend Application
</h2>

Deploy the application

Step by Step:
  - Copy folder "latihanfe" and "latihanbe" to root folder
  - you can access the application through "localhost/latihanfe/login.html"

This is application consist module:
  - Login
  - Register
  - Menu Utama
  - Pembelian
  - Penjualan
  - Stok

Basic Requirement:
  - Login to go into Menu Utama
  - There is mandatory mark on on several field, it can not be empty
  - To add stok, you need pembelian
  - To reduce stok, you need penjualan
  - you can not do penjualan below your current stok
  - field jumlah must numeric
  - field jumlah on pembelian must below 100
  - stok must calculate the penjualan and pembelian

- Let's us testing!

</div>

<div id="final-testing">
<h2>
  Testing Question
</h2>

Task:
1. Create Blackbox testing (Usability Testing) scenario based on the application. (Test it, and save the screen shot proof of testing) - all of it save using excel
2. Create Blackbox testing (User Acceptance Testing) scenario based on the application. (Test it, and save the screen shot proof of testing) - all of it save using excel
3. Create API Testing, Use Body Form-Data not JSON: (Screen shot each API result and testing tab result)
      - Create "Pembelian",
           - with jumlah must be numeric
           - with jumlah can not over 100
      - Create "Penjualan",
           - with jumlah must be numeric
      - Read "Stok",
5. Create API Chained Testing, with scenario: Do "Pembelian", Do "Penjualan", Check "Stok" (stok result must be "jumlah pembelian - jumlah penjualan") - Screen shot API Chained Result and Code each chained
6. Create Unit Testing (Using PHPUnit) for: (Send the code)
      - Create "Pembelian",
           - with jumlah must be numeric
           - with jumlah can not over 100
      - Create "Penjualan",
           - with jumlah must be numeric
8. Create Performance Testing for the localhost, test it for 1000 threads for ramp-up 10 minute and loop count 3. (send the screen shot result with explaination result)
9. Create Selenium Testing, with scenario: Do "Pembelian", Do "Penjualan", Check "Stok" (stok result must be "jumlah pembelian - jumlah penjualan") - Send the code

Bonus Task:
In this code I put 1 XSS Vurnability and SQL Injection, search it.
Hint:
- XSS need to use:
```
<img src=x onerror=alert('XSS berhasil')>
```
- SQL Injection you need to use "Trunacte" SQL code.

- Save all your testing proof and send it to my email!
</div>
