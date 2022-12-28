
import org.kordamp.ikonli.javafx.FontIcon;

import javafx.application.*;

import java.io.*;
import java.util.*;

import io.github.palexdev.materialfx.controls.MFXButton;

public class Main extends Application {
    /*
    public ArrayList<Places> getGraphPlaces() {
        return Graph2
    }
    */
    //static HelloController myController;
    @Override
    public void start(Stage primaryStage) throws IOException {
        ManageLists Graph2 = new ManageLists("../files/knots.csv");
        ArrayList<Places> placesArray = Graph2.getPlacesArray();
        ArrayList<Roads> roadsArray = Graph2.getRoadsArray();

        Matrice matrice = new Matrice(roadsArray,placesArray); //en 1er les routes, ensuite les endroits

        Fonctionnalites fonctionnalites = new Fonctionnalites(matrice,placesArray,roadsArray);  //d'abord la matrice ensuite les endroits puis les routes

        Djikstra D = new Djikstra(roadsArray,placesArray);
        //System.out.println(D.getResult(placesArray.get(0),placesArray.get(1)));


        System.out.println(fonctionnalites.getPlacesArray());

        System.out.println(fonctionnalites.getRoadsArray());

        //System.out.println(Screen.getPrimary().getBounds());

        FXMLLoader fxmlLoader = new FXMLLoader(HelloApplication.class.getResource("hello-view.fxml"));
        FXMLLoader fxmlLoader = new FXMLLoader(HelloApplication.class.getResource("page-accueil.fxml"));
        Scene scene = new Scene(fxmlLoader.load());
        scene.getStylesheets().add(BootstrapFX.bootstrapFXStylesheet());
        scene.getStylesheets().add(getClass().getResource("style_accueil.css").toExternalForm());
        scene.getStylesheets().add(getClass().getResource("style_accueil2.css").toExternalForm());

        //System.out.println(String.join("\n", Font.getFamilies()));

        primaryStage.setTitle("Graphe");

        primaryStage.fullScreenProperty().addListener((observableScene, oldScene, property) -> {
            if (!property) {
                primaryStage.setFullScreen(true);
            }
        });

        primaryStage.setOpacity(0.0);
        primaryStage.setScene(scene);
        primaryStage.setFullScreen(true);
        primaryStage.setResizable(false);
        primaryStage.show();

        FXMLLoader fxmlLoader_1voisins = new FXMLLoader(HelloApplication.class.getResource("hello-view.fxml"));
        fxmlLoader_1voisins.load();
        PageAccueilController controllerAccueil;
        controllerAccueil = fxmlLoader.getController();
        //System.out.println(fonctionnalites);
        controllerAccueil.fillGraph(fonctionnalites);
    }

    public static void main(String[] args) throws IOException{
        launch(args);
    }
}