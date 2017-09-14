    google.charts.load('current', {'packages':['treemap']});

    google.charts.setOnLoadCallback(drawChart1);

    google.charts.setOnLoadCallback(drawChart2); 

    google.charts.setOnLoadCallback(drawChart3);


    function drawChart1() {
         var data = google.visualization.arrayToDataTable([
          ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
          ['Criteria',null,0,0],
          ['#25 JavaScript Stackoverflow','Criteria',0,0],
          ['3 Qualifications','Criteria',0,0],
          ['4 Projects','Criteria',0,0],
          ['Australia', 'Criteria',0,0],
          ['7 Years of Experience','Criteria',0,0],
          ['#139 Python Github','Criteria',0,0],
          ["JAVASRIPT score:1891",'#25 JavaScript Stackoverflow',80,10],
          ["PYTHON score:917",'#25 JavaScript Stackoverflow',50,31],
          ["PHP score:85",'#25 JavaScript Stackoverflow',40,12],
          ['C# score: 12','#25 JavaScript Stackoverflow',30,-23],
          ['Bachelor of Commerce (UWA)','3 Qualifications',42,-11],
          ['Master of Commerce (UQ)','3 Qualifications',31,-2],
          ['Master of IT (UTS)','3 Qualifications',31,-2],
          ['Hybrid Netbank Application Development (CBA)','4 Projects',46,4],
          ['Mobile Banking Application Development (NAB)','4 Projects',46,-12],
          ['Payment Gateway API Development (NAB)','4 Projects',46,63],
          ['Payment Gateway API Development (SUNCORP)','4 Projects',46,63],
          ['Java Android Development (4 Years)','7 Years of Experience',80,0],
          ['C# .NET Development (2 Years)', '7 Years of Experience',40,43],
          ['Python Django Development (1 Year)','7 Years of Experience',35,2],
          ['PYTHON 6626 Stars','#139 Python Github',50,10],
          ['JAVASCRIPT 150 Stars','#139 Python Github',25,10],
          ['OBJECTIVE-C 98 Stars','#139 Python Github',8,10],
          ['HASKELL 19 Stars','#139 Python Github',8,10],
        ]);

        tree = new google.visualization.TreeMap(document.getElementById('chart1_div'));

        tree.draw(data, {
          minColor: '#f00',
          midColor: '#ddd',
          maxColor: '#0d0',
          headerHeight: 15,
          fontColor: 'black',
          showScale: true
        });
    }
       
  function drawChart2() {
         var data = google.visualization.arrayToDataTable([
              ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
              ['Criteria',null,0,0],
              ['#38 JavaScript Stackoverflow','Criteria',0,0],
              ['3 Qualifications','Criteria',0,0],
              ['3 Projects','Criteria',0,0],
              ['Australia', 'Criteria',0,0],
              ['5 Years of Experience','Criteria',0,0],
              ['#139 Ruby Github','Criteria',0,0],
              ["JAVASRIPT score:1891",'#38 JavaScript Stackoverflow',80,10],
              ["JAVA score:917",'#38 JavaScript Stackoverflow',50,31],
              ["PHP score:85",'#38 JavaScript Stackoverflow',40,12],
              ['C# score: 12','#38 JavaScript Stackoverflow',30,-23],
              ['Bachelor of Commerce (UWA)','3 Qualifications',42,-11],
              ['Master of Commerce (UQ)','3 Qualifications',31,-2],
              ['Master of IT (UTS)','3 Qualifications',31,-2],
              ['Hybrid Netbank Application Development (CBA)','3 Projects',36,4],
              ['Mobile Banking Application Development (NAB)','3 Projects',20,-12],
              ['Payment Gateway API Development (NAB)','3 Projects',40,63],
              ['Java Android Development (4 Years)','5 Years of Experience',40,0],
              ['C# .NET Development (2 Years)', '5 Years of Experience',20,43],
              ['Python Django Development (1 Year)','5 Years of Experience',15,2],
              ['ruby 6626*','#139 Ruby Github',50,10],
              ['javascript 150*','#139 Ruby Github',25,10],
              ['objective-c 98*','#139 Ruby Github',8,10],
              ['haskell 19*','#139 Ruby Github',8,10],
            ]);

        tree = new google.visualization.TreeMap(document.getElementById('chart2_div'));

        tree.draw(data, {
          minColor: '#f00',
          midColor: '#ddd',
          maxColor: '#0d0',
          headerHeight: 15,
          fontColor: 'black',
          showScale: true
        });
    }

  function drawChart3() {
         var data = google.visualization.arrayToDataTable([
        ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
              ['Criteria',null,0,0],
              ['#287 JavaScript Stackoverflow','Criteria',0,0],
              ['3 Qualifications','Criteria',0,0],
              ['3 Projects','Criteria',0,0],
              ['Australia', 'Criteria',0,0],
              ['7 Years of Experience','Criteria',0,0],
              ['#139 Ruby Github','Criteria',0,0],
              ["JAVASRIPT score:1891",'#287 JavaScript Stackoverflow',80,10],
              ["JAVA score:917",'#287 JavaScript Stackoverflow',50,31],
              ["PHP score:85",'#287 JavaScript Stackoverflow',40,12],
              ['C# score: 12','#287 JavaScript Stackoverflow',30,-23],
              ['Bachelor of Commerce (UWA)','3 Qualifications',42,-11],
              ['Master of Commerce (UQ)','3 Qualifications',31,-2],
              ['Master of IT (UTS)','3 Qualifications',31,-2],
              ['Hybrid Netbank Application Development (CBA)','3 Projects',36,4],
              ['Mobile Banking Application Development (NAB)','3 Projects',20,-12],
              ['Payment Gateway API Development (NAB)','3 Projects',40,63],
              ['Java Android Development (4 Years)','7 Years of Experience',40,0],
              ['C# .NET Development (2 Years)', '7 Years of Experience',20,43],
              ['Python Django Development (1 Year)','7 Years of Experience',15,2],
              ['ruby 6626*','#139 Ruby Github',50,10],
              ['javascript 150*','#139 Ruby Github',25,10],
              ['objective-c 98*','#139 Ruby Github',8,10],
              ['haskell 19*','#139 Ruby Github',8,10],
            ]);

        tree = new google.visualization.TreeMap(document.getElementById('chart3_div'));

        tree.draw(data, {
          minColor: '#f00',
          midColor: '#ddd',
          maxColor: '#0d0',
          headerHeight: 15,
          fontColor: 'black',
          showScale: true
        });
    }