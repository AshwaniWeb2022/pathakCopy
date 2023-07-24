const testimonialsContainer = document.querySelector(".testimonials-container");
const testimonial = document.querySelector(".testimonial");
const username = document.querySelector(".username");
const AddName = document.querySelector(".add");

const testimonials = [
  {
    name: "RISHIPAL SINGH",
    Address: "MANSAROVER COLONY MORADABAD ",
    text:
      "We made several changes throughout the process and  Er.Tushar Pathak patiently worked through all our concerns."
  },
  {
    name: "Yamika Singh",
    Address: "Ram Ganga Vihar , Moradabad ",
    text:
      "The team was very thorough with the planning and kept me informed. They did a wonderful job with the construction."
  },
  {
    name: "Prem Bhatia",
    Address: "Noida",
    text:
      "From start to finish Pathak Builders provides a home building experience with honesty, integrity, and professionalism. They took our house plan and worked with us to make design changes that improved the functionality and aesthetics of our home. This was done in a very prompt manner."
  },
  {
    name: "Dr Pankaj Vishnoi",
    Address: "New delhi",
    text:
      "We are indebted to you and your entire team. Words can’t express , it is really a dream come true to enter our most stunning home ."
  },
  {
    name: "Pankaj gupta",
    Address: "SBI Moradabad",
    text:
      "Nothing beats the feeling of moving into your own house !! Only possible with amazing execution and beautiful architecture by Pathak builders . Highly recommended"
  },
  {
    name: "HIMANSHU SINGH",
    Address: "WAVE GREENS",
    text:
      "WE MADE THE RIGHT CHOICE BY CHOOSING PATHAK CONSTRUCTIONS"
  },
];

let idx = 1;

function updateTestimonial() {
  const { name, Address, text } = testimonials[idx];

  testimonial.innerHTML = text;
  username.innerHTML = name;
  AddName.innerHTML = Address; 

  idx++;

  if (idx > testimonials.length - 1) {
    idx = 0;
  }
}

setInterval(updateTestimonial, 10000);
