const appelerMeteo = async () => {
  const response = await fetch(
    "https://www.weatherwp.com/api/common/publicWeatherForLocation.php?city=Crest&country=France&language=french"
  );
  const myJson = await response.json();
  console.log(myJson);
};
appelerMeteo();
