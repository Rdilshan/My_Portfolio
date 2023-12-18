

const projectsPerPage = 6; // Number of projects to display per page
const projects = document.querySelectorAll('.project');
const paginationContainer = document.querySelector('.pagination');



function generatePaginationLinks(selectedPage) {

   function displayProjects(pageNumber) {
      console.log(pageNumber);
   const startIndex = (pageNumber - 1 ) * projectsPerPage;
   const endIndex = startIndex + projectsPerPage;

   for (let i = 0; i < projects.length; i++) {
      if (i >= startIndex && i < endIndex) {
         projects[i].style.display = 'block';
      } else {
         projects[i].style.display = 'none';
      }
   }
   }
   
   displayProjects(selectedPage);
   const totalPages = Math.ceil(projects.length / projectsPerPage);

   paginationContainer.innerHTML = '';

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
         paginationContainer.querySelectorAll('a').forEach((link) =>
            link.classList.remove('active')
         );
         link.classList.add('active');
         generatePaginationLinks(i);
      });

      paginationContainer.appendChild(link);
   }
}

// Initially display the projects on the first page and generate pagination links

generatePaginationLinks(1);
displayProjects(1);

