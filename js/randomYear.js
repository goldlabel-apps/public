export const randomYear = () => {
	// returns a random year between 1700 & 2099
	const centuries = [ `16`, `17`, `18`, `19`, `20` ]
	const year = Math.floor(Math.random() * 90 + 10)
	return `${centuries[ Math.floor( Math.random() * centuries.length) ]}${year}`
}
