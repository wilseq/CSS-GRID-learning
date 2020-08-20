<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CSS Grid</title>
    <style>

      .wrapper{
        display: grid;
        grid-template-columns: 1fr 2fr 1fr;
        grid-auto-rows: minmax(100px, auto);
        grid-gap: .5em;
    /*    justify-items:start; */
    /*      justify-items:end;  */
    /*    justify-items:center;*/
        justify-item:stretch;
    /*    align-items: center;
        align-items: end;
        align-items: start;*/
        align-items:stretch;

      }
        .wrapper > div{
          background:#ddd;
          padding: 1em;
        }
        .wrapper > div:nth-child(odd){
          background:#bbb;
        }
        .box1{
      /*    align-self: start; */
            grid-column: 1/3;
            grid-row: 1/3;
        }
        .box2{
      /*    align-self: end; */
      grid-column: 3;
      grid-row: 1/3;

        }
        .box3{
      /*    justify-self:end;   */
          grid-column: 2/4;
          grid-row: 3;
        }
        .box4{
      /*    justify-self:center;  */
        grid-column: 1;
        grid-row: 2/4;
        border-top: 1px solid #333;
        }
    </style>
  </head>
  <body>
    <div class="wrapper">
       <div class="box box1">Box 1</div>
       <div class="box box2">Box 2</div>
       <div class="box box3">Box 3</div>
       <div class="box box4">Box 4</div>
    </div>


  </body>
</html>
