@include('Frontend.Front.Layouts.header')


<div class="full-width bg-bg-2">
    <div class="text-center px-5 pt-[74px] pb-[90px]">
        <h1 class="font-chivo font-bold lg:text-display-3 md:text-[45px] md:leading-[52px] text-[35px] leading-[42px] mb-7">{{ $page->title }}</h1>
        <p class="font-bold font-chivo text-[14px] md:text-heading-6 text-gray-600 mx-auto md:max-w-[55ch]">{{ $page->short_title }}</p>
    </div>
</div>


<div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px] lg:mt-[138px]">
    {!!html_entity_decode($page->page_description)!!}
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    // Get the common ID element and its siblings
const commonId = document.querySelector("#commonId");
const siblings = Array.from(commonId.parentNode.children);

// Loop through the siblings and add classes to <p> tags
siblings.forEach((sibling) => {
  if (sibling.tagName === "P") {
    sibling.classList.add("text-quote", "md:text-lead-lg", "text-gray-600");
  }
});

// Add <br> tag after <p> tags based on a common ID
$("#commonId").nextAll("p").after("<br>");
</script>

<script>
    // Select the bee2 element and its parent
const bee2 = document.querySelector('#bee2');
const parent = bee2.parentNode;

// Select the h2 element within the parent and add classes to it
const h2 = parent.querySelector('h2');
h2.classList.add(
  'text-gray-900',
  'font-bold',
  'font-chivo',
  'mb-5',
  'text-35px',
  'leading-44px',
  'md:text-46px',
  'md:leading-52px',
  'lg:text-heading-1',
  'md:mb-30px'
);
</script>

<script>
    const commonId = document.getElementById("commonId");
    const siblings = Array.from(commonId.parentNode.children);
    const paragraphs = siblings.filter(el => el.tagName === "P");

    paragraphs.forEach(p => {
    const br = document.createElement("br");
    p.after(br);
    });
</script>

<script>
    const headings = document.querySelectorAll("h3");
    headings.forEach((heading) => {
        heading.classList.add("font-bold", "font-chivo", "text-[20px]", "leading-[26px]", "md:text-heading-4", "mb-8");
    });
</script>

<script>
    $("ol#oltag").css({
    "list-style": "decimal-leading-zero",
    "padding-left": "40px"
    });
</script>

<script>
    $("li#commomorderList").addClass("text-quote md:text-lead-lg text-gray-600");
</script>

<script>
    $("li#commomorderList").after("<br>");
</script>





@include('Frontend.Front.Layouts.newsletter')
@include('Frontend.Front.Layouts.footer')


