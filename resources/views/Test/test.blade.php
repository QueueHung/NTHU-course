<table id="table">
  <thead>
  <tr>
    <th class='handle'>header1</th>
    <th class='handle'>header2</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td class="set">conten1</td>
    <td class="set">conten2</td>
  </tr>
  <tr>
    <td class="set">content1</td>
    <td class="set">content2</td>
  </tr>
  </tbody>
</table>

<script type="text/javascript" src="{{asset('js/table-dragger.min.js')}} "></script>
<script type="text/javascript">
  var el = document.getElementById('table');
  //el.style.cssText = 'background-color:#0f0f0f';
  
  var dragger = tableDragger(el, {
    mode: 'row',
    dragHandler: '.set',
    onlyBody: true,
    animation: 300
  });
  
  dragger.on('drop',function(from, to){
    console.log(from);
    console.log(to);
  });
  
</script>