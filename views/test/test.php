<ul class="breadcrumb">
  <li><i class="material-icons md-18">home</i> <a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></li>
  <li class="active">Carte des joueurs de Transformice en ligne</li>
</ul>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["geochart"]});
      google.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
          ['Pays', 'Joueurs'],
          ['France', 357],
          ['Belgium', 357],
          ['Luxembourg', 357],
          ['Democratic Republic of the Congo', 357],
          ['Madagascar', 357],
          ['Ivory Coast', 357],
          ['Burkina Faso', 357],
          ['Niger', 357],
          ['Guinea', 357],
          ['Chad', 357],
          ['Senegal', 357],
          ['Benin', 357],
          ['Togo', 357],
          ['Haiti', 357],
          ['Central African Republic', 357],
          ['Republic of the Congo', 357],
          ['Vanuatu', 357],
          ['Gabon', 357],
          ['Comoros', 357],
          ['Equatorial Guinea', 357],
          ['Djibouti', 357],
          ['Monaco', 357],

          ['Brazil', 2311],
          ['Portugal', 2311],
          
          ['United States', 503],
          ['United Kingdom', 503],
          ['Ireland', 503],
          ['India', 503],
          ['Bahamas', 503],
          ['Barbados', 503],
          ['Belize', 503],
          ['Botswana', 503],
          ['Burundi', 503],
          ['Cameroon', 503],
          ['Canada', 503],
          ['Cook Islands', 503],
          ['Dominica', 503],
          ['Eritrea', 503],
          ['Fiji', 503],
          ['Gambia', 503],
          ['Ghana', 503],
          ['Grenada', 503],
          ['Guyana', 503],
          ['Jamaica', 503],
          ['Kenya', 503],
          ['Kiribati', 503],
          ['Lesotho', 503],
          ['Liberia', 503],
          ['Malawi', 503],
          ['Malta', 503],
          ['Namibia', 503],
          ['Nigeria', 503],
          ['Pakistan', 503],
          ['Palau', 503],
          ['Rwanda', 503],
          ['Sierra Leone', 503],
          ['South Africa', 503],
          ['Sudan', 503],
          ['Swaziland', 503],
          ['Somaliland', 503],
          ['Tanzania', 503],
          ['Singapore', 503],
          ['Seychelles', 503],
          ['Uganda', 503],
          ['Zambia', 503],
          ['Zimbabwe', 503],
          ['Mauritius', 503],

          ['Spain', 1741],

          ['Equador', 1741],
          ['Argentina', 1741],
          ['Chile', 1741],
          ['Peru', 1741],
          ['Colombia', 1741],
          ['Venezuela', 1741],
          ['Bolivia', 1741],
          ['Turkey', 642],
          ['Poland', 530],
          ['Russia', 154],
          ['China', 5],
          ['Norway', 4],
          ['Hungary', 95],
          ['Netherlands', 16],
          ['Romania', 336],
          ['Indonesia', 1],
          ['Germany', 15],
          ['Saudi Arabia', 204],
          ['Philippines', 0],
          ['Japan', 3],
          ['Finland', 2],
          ['Italy', 7],
          ['Lithuania', 16],
          ['Israel', 7],
          ['Czech Republic', 82],
          ['Croatia', 9],
          ['Bulgaria', 42],
          ['Austria', 1],
          ['Estonia', 19]
        ]);

        var options = {
          colorAxis: {colors: ['#ecf0f1', '#c0392b']},
          datalessRegionColor: '#262626',
          backgroundColor: '#fafafa'
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
    <div class="well">
      <div id="regions_div" style="width: 100%; height: 600px;"></div>
    </div>