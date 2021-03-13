package denny.belajar.stock.controller

import org.springframework.web.bind.annotation.GetMapping
import org.springframework.web.bind.annotation.RestController

@RestController
class HomeController {

    @GetMapping(
        value = ["/"]
    )
    fun helloWorld(): String {
        return "Hello World"
    }

}