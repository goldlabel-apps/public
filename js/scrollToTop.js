export const scrollToTop = () => {
  const el = document.getElementById( `topAnchor`)
  if (el){
    el.scrollIntoView({
      behavior: `smooth`
    })
    return true
  }
  return false
}
