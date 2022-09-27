let widget = document.getElementById("meteo-widget-container");
let country = document.getElementById("widget-country-name").textContent;
let city = document.getElementById("widget-city-name").textContent;
let icon = document.getElementById("widget-icon");

let url =
  "https://www.weatherwp.com/api/common/publicWeatherForLocation.php?city=" +
  city +
  "&country=" +
  country +
  "&language=french";

let desc = document.createElement("p");
let temp = document.createElement("p");
let iconUrl = "";

const callWeatherAPI = async () => {
  const response = await fetch(url);
  const myJson = await response.json();

  desc.innerText = myJson.description;
  temp.innerText = myJson.temp + "°C";
  iconUrl = myJson.icon;

  console.log("desc =>", desc);
  console.log("temp =>", temp);
  console.log("iconUrl=>", iconUrl);

  icon.setAttribute("src", iconUrl);
  widget.appendChild(desc);
  widget.appendChild(temp);
};

callWeatherAPI();
