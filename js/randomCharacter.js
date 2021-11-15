export const randomCharacter = () => {
	const characters = [
		{ 
			name: `Biker`, 
			avatar: `https://listingslab.com/public/png/avatars/Biker.png`
		}, 
		{ 
			name: `Chix`, 
			avatar: `https://listingslab.com/public/png/avatars/Chix.png`
		},	
		{ 
			name: `Dapper`, 
			avatar: `https://listingslab.com/public/png/avatars/Dapper.png`
		},	
		{ 
			name: `Hippy`, 
			avatar: `https://listingslab.com/public/png/avatars/Hippy.png`
		},		
		{ 
			name: `Hipster`, 
			avatar: `https://listingslab.com/public/png/avatars/Hipster.png`
		},
		{ 
			name: `Mumma`, 
			avatar: `https://listingslab.com/public/png/avatars/Mumma.png`
		},
		{ 
			name: `Punk`, 
			avatar: `https://listingslab.com/public/png/avatars/Punk.png`
		},
		{ 
			name: `Rasta`, 
			avatar: `https://listingslab.com/public/png/avatars/Rasta.png`
		},	
		{ 
			name: `Rocker`, 
			avatar: `https://listingslab.com/public/png/avatars/Rocker.png`
		},				
	]
	return characters[ Math.floor( Math.random() * characters.length) ]
}