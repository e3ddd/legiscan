let posts = [];


fetch('www.js-api.com/posts')
.then((response) => {
  posts = response.data
})
.catch(err => console.log(err))

for (const postsKey in posts) {
 document.createElement('div')
}
