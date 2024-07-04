

Bootstrap:

class based

Color:
primary             : blue
secondry            : gray
success             : green
danger              : red
info                : cyan
warning             : yellow
light               : white
dark                : black
white 
black


text:
- b5:
text-danger
text-decoration-none
text-decoration-underline
text-start
text-center
text-end

- font-size:
fs-6      (small font)


- background color:
bg-primary

- border:
border
border border-primary
border border-1
border-top border-3


- border radius:
rounded 
rounded-top
rounded-bottom
rouned-circle
rounded-pill

- shadow
shadow
shadow-sm
shadow-lg
shadow-0


- margin and padding
m-5  : 5= 48px  margin
mt-5    : margin top
mb-5    :margin botton
mx-5    : margin left and right
my-5    : margin top and bottom
ms-5    :margin left
me-5    :margin right

p-5  : 5= 48px  padding
pt-5    : padding top
pb-5    :padding botton
px-5    : padding left and right
py-5    : padding top and bottom
ps-5    :padding left
pe-5    :padding right

- button
  btn
  btn btn-primary
  btn btn-primary btn-sm
  btn btn-primary btn-lg


- width
w-100
w-75
w-50
w-25

-height (by default you need to provide the height of the parent element)
e.g.
<div style="height:100px">
    <div class="h-50">
    </div>
</div>


h-100
h-75
h-50
h-25

- overflow
  overflow-hidden
  overflow-auto
  overflow-scroll

- position
  position-static
  position-relative         : privode it in parent element  (top and left)
  position-absolute         : provide it in child element 
  position-fixed
  position-sticky           : Provide it in parent element

  top-100
  top-50
  top-0

  right-100
  bottom-100

  - float layout technique
  float-start
  float-end
  float-none


- display layout technique
    d-flex
    d-inline-block
    d-block
    d-none
    flex-grow-1
    flex-shrink-1
    flex-wrap
    flex-column
    flex-row
    flex-row-reverse
    flex-column-reverse
    justify-content-start
    justify-content-end
    justify-content-center
    justify-content-between
    justify-content-around
    justify-content-evenly
    align-items-start
    align-items-end
    align-items-center
    align-items-baseline
    align-items-stretch
    align-content-start
    gap-3


RWD
@media (min-width: 576px) { ... }  : android 
@media (min-width: 768px) { ... }   : tablate
@media (min-width: 992px) { ... }   : laptop
@media (min-width: 1200px) { ... }  : desktop
@media (min-width: 1400px) { ... }  : large device

Break point:
points              classes
480px               -
576px or 600px      sm
768px or 800px      md
992px or 1000px     lg
1200px or 1100px    xl
1400px             xxl


Responsive Web Design
row         : provide it in parent element
col         : provide it in child element

Total column : 12
col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12









