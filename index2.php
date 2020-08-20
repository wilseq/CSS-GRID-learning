<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CSS Grid</title>
    <style>

      .wrapper{
        display: grid;
      /*  grid-template-columns:1fr 2fr 1fr; divides into 2 columns of 70% and 30% width of screen*/
        grid-template-columns:repeat(3, 1fr);/* divides into 3 coloumns of 1fr*/
      /*  grid-template-columns:repeat(3, 1fr 2fr); combination of division of coloumns*/
        grid-column-gap: .5em; /* gap size of the gutters ie the gap of columns  */
        grid-row-gap:.5em ;   /* gap size of the gutters ie the gap of rows  */
      /*  grid-auto-rows:100px; /* it is fixed height*/
        grid-auto-rows:minmax(100px,auto); /*height flexible*/

      }
      .nested{
        display: grid;
        grid-template-columns:repeat(3, 1fr);/*nested division*/
        grid-auto-rows: 70px;                 /*nested coloumn height*/
        grid-gap:1em;


      }
      .nested > div{
        border: #333 1px solid;
        padding: 1em;
      }
        .wrapper > div{
          background:#ddd;
          padding: 1em;
        }
        .wrapper > div:nth-child(odd){
          background:#bbb;
        }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="">
        Lorem ipsum dolor sit.
      </div>

      <div class="">
        Lorem ipsum dolor sit.Lorem Ipsum is simply dummy text of the
         printing and typesetting industry.Lorem Ipsum has been the industry's
         standard dummy text ever since the 1500s, when an unknown printer took
          a galley of type and scrambled it to make a type specimen book. It has
           survived not only five centuries, but also the leap into a galley of
           type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into
      </div>

      <div class="nested">
        <div>Lorem</div>
        <div>Lorem</div>
        <div>Lorem</div>
        <div>Lorem</div>
        <div>Lorem</div>
        <div>Lorem</div>
      </div>

      <div class="">
        Lorem ipsum dolor sit.
      </div>

      <div class="">
        Lorem ipsum dolor sit.
      </div>

      <div class="">
        Lorem ipsum dolor sit.
      </div>

      <div class="">
        Lorem ipsum dolor sit.
      </div>

    </div>

  </body>
</html>
