

const blogpages = 4; // Number of bloges to display per page
const bloges = document.querySelectorAll('.blogboxes');
const paginationContainerblog = document.querySelector('.paginationblog');



function generatePaginationLinksblog(selectedPage) {

   function displayblogesblog(pageNumber) {
      console.log(pageNumber);
   const startIndex = (pageNumber - 1 ) * blogpages;
   const endIndex = startIndex + blogpages;

   for (let i = 0; i < bloges.length; i++) {
      if (i >= startIndex && i < endIndex) {
         bloges[i].style.display = 'block';
      } else {
         bloges[i].style.display = 'none';
      }
   }
   }
   
   displayblogesblog(selectedPage);
   const totalPages = Math.ceil(bloges.length / blogpages);

   paginationContainerblog.innerHTML = '';

   let startPage, endPage;

   if (totalPages <= 3) {
      startPage = 1;
      endPage = totalPages;
   } else {
      if (selectedPage <= 2) {
         startPage = 1;
         endPage = 3;
      } else if (selectedPage >= totalPages - 1) {
         startPage = totalPages - 2;
         endPage = totalPages;
      } else {
         startPage = selectedPage - 1;
         endPage = selectedPage + 1;
      }
   }

   for (let i = startPage; i <= endPage; i++) {
      const link = document.createElement('a');
      link.href = '#';
      link.textContent = i;

      if (i === selectedPage) {
         link.classList.add('active');
      }

      link.addEventListener('click', (event) => {
         event.preventDefault();
         paginationContainerblog.querySelectorAll('a').forEach((link) =>
            link.classList.remove('active')
         );
         link.classList.add('active');
         generatePaginationLinksblog(i);
      });

      paginationContainerblog.appendChild(link);
   }
}

// Initially display the bloges on the first page and generate pagination links

generatePaginationLinksblog(1);
displayblogesblog(1);

