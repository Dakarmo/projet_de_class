async function getUser(username) {
 
        let users = await fetch(`https://api.github.com/users/${username}`);
        let response= await users.json();
        console.log(response);
      return response;
        
}

export default getUser;
