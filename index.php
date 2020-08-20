<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CSS Grid</title>
    <style>
      .wrapper{
        display: grid;
        grid-template-columns:70% 30%; /*divides into 2 columns of 70% and 30% width of screen*/
        grid-column-gap: .5em; /* gap size of the gutters ie the gap of columns  */
        grid-row-gap:.5em ;   /* gap size of the gutters ie the gap of rows  */
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
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
           Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
             specimen book. It has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was popularised in
               the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
               and more recently with desktop publishing software like Aldus PageMaker includ
               ing versions of Lorem Ipsum.

            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable
             content of a page when looking at its layout. The point of using Lorem Ipsum
              is that it has a more-or-less normal distribution of letters, as opposed t
              o using 'Content here, content here', making it look like readable English.
              Many desktop publishing packages and web page editors now use Lorem Ipsum as
               their default model text, and a search for 'lorem ipsum' will uncover many
                web sites still in their infancy. Various versions have evolved over the
                years, sometimes by accident, sometimes on purpose (injected humour and
              the like).
      </div>

      <div class="">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry
        . Lorem Ipsum has been the industry's standard dummy text ever since th
        e 1500s, when an unknown printer took a galley of type and scrambled it t
        o make a type specimen book. It has survived not only five centuries, but
        also the leap into electronic typesetting, remaining essentially unchanged.
         It was popularised in the 1960s with the release of Letraset sheets contai
      </div>

      <div class="">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
           Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
             specimen book. It has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was popularised in
               the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
               and more recently with desktop publishing software like Aldus PageMaker includ
               ing versions of Lorem Ipsum.

            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable
             content of a page when looking at its layout. The point of using Lorem Ipsum
              is that it has a more-or-less normal distribution of letters, as opposed t
              o using 'Content here, content here', making it look like readable English.
              Many desktop publishing packages and web page editors now use Lorem Ipsum as
               their default model text, and a search for 'lorem ipsum' will uncover many
                web sites still in their infancy. Various versions have evolved over the
                years, sometimes by accident, sometimes on purpose (injected humour and
              the like).
      </div>

      <div class="">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry
        . Lorem Ipsum has been the industry's standard dummy text ever since th
        e 1500s, when an unknown printer took a galley of type and scrambled it t
        o make a type specimen book. It has survived not only five centuries, but
        also the leap into electronic typesetting, remaining essentially unchanged.
         It was popularised in the 1960s with the release of Letraset sheets contai
      </div>

    </div>

  </body>
</html>
