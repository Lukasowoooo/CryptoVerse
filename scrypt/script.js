document.addEventListener('DOMContentLoaded', function() {
    const showPostsBtn = document.getElementById('show-posts');
    const addPostBtn = document.getElementById('add-post');
    const postsTab = document.getElementById('posts-tab');
    const addPostTab = document.getElementById('add-post-tab');
  
    showPostsBtn.addEventListener('click', function() {
      showTab('posts-tab');
    });
  
    addPostBtn.addEventListener('click', function() {
      showTab('add-post-tab');
    });
  
    function showTab(tabId) {
      const tabs = document.querySelectorAll('.tab-content');
      tabs.forEach(tab => {
        if (tab.id === tabId) {
          tab.style.display = 'block';
        } else {
          tab.style.display = 'none';
        }
      });
    }
  

    showTab('posts-tab'); 
    fetchPosts();
    function fetchPosts() {
      fetch('fetch_posts.php')
        .then(response => response.text())
        .then(data => {
          postsTab.innerHTML = data; 
        })
        .catch(error => {
          console.error('Błąd podczas pobierania postów:', error);
        });
    }
  });
  