export async function fetchPosts(){
    const response = await fetch("/api.php");
    let list = await response.json();
    console.log(list);
}
