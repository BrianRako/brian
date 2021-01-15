const rewire = require("rewire")
const previewimage = rewire("./previewimage")
const loadFile = previewimage.__get__("loadFile")
// @ponicode
describe("loadFile", () => {
    test("0", () => {
        loadFile({})
    })
})
