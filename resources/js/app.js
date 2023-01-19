import './bootstrap';

const show_preview = (value) => {
  const html_preview = document.querySelector("#html_preview")
  html_preview.innerHTML = value;
}

const handle_post_html = () => {
  const post_preview_container = document.querySelector("#post_preview_container")
  const post = document.querySelector("#post")
  const html_preview_btn = document.querySelector("#html_preview_btn")
  const html_preview = document.querySelector("#html_preview")

  html_preview_btn.addEventListener('click', () => {
    html_preview_btn.classList.toggle('bg-purple-300')
    html_preview_btn.classList.toggle('bg-purple-600')
    post_preview_container.classList.toggle('grid')
    html_preview.classList.toggle('hidden')
  })

  post.addEventListener('keyup', (e)=> {
    setTimeout(()=> {
      show_preview(e.target.value)
    }, 1000)
  })
}


handle_post_html()