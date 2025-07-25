const express = require("express");
const path = require("path");
const app = express();

// Servir les fichiers statiques
app.use(express.static(path.join(__dirname, "public")));
app.use("/assets", express.static(path.join(__dirname, "assets")));

// Toutes les routes renvoient vers index.php
app.get("*", (req, res) => {
  res.sendFile(path.join(__dirname, "public", "index.php"));
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
